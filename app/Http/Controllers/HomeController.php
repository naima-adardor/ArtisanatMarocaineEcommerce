<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\product;
use App\Models\category;
use App\Models\promotion;
use App\Models\order;
use App\Models\rating;
use App\Models\review;
use App\Models\Cart;
use App\Models\order_detail;
use App\Models\DetailLivraison;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyTestMail;
use Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth'])->except(["index", "detail", "contact", "searchproduct", "promoo", "allpromo", "view_category", "addcontact"]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function redirect()
    {
        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            $users = User::where('usertype', 0)->get();
            $products = product::all();
            $orders = order::all();
            $order = order::all();
            $categories = category::all();
            return view('admin.home', compact('users', 'products', 'orders', 'categories', 'order'));
        } else {
            $id_user = Auth::id();
            $count = cart::where('id_user', $id_user)->count();
            $data = product::paginate(12);
            $c = Cart::where('id_user', $id_user)->get();
            $category = category::all();

            $total = 0;
            $cart = Cart::where('id_user', $id_user)->get();
            foreach ($cart as $carts) {
                $total = $carts->total + $total;
            }
            return view('home', compact('data', 'category', 'count', 'c', 'cart', 'total'));
        }
    }
    public function index()
    {
        $id_user = Auth::id();
        $count = cart::where('id_user', $id_user)->count();
        $c = Cart::where('id_user', $id_user)->get();
        $data = product::paginate(12);


        $total = 0;
        $cart = Cart::where('id_user', $id_user)->get();
        foreach ($cart as $carts) {
            $total = $carts->total + $total;
        }
        $category = category::all();
        return view('home', compact('data', 'category', 'count', 'c', 'cart', 'total'));
        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            return view('admin.home');
        }
    }

    public function detail($id)
    {
        $id_user = Auth::id();
        $c = Cart::where('id_user', $id_user)->get();
        $total = 0;
        $cart = Cart::where('id_user', $id_user)->get();
        foreach ($cart as $carts) {
            $total = $carts->total + $total;
        }

        $count = cart::where('id_user', $id_user)->count();

        $product = Product::where('id_product', $id)->first();

        $rating = rating::where('id_product', $product->id_product)->get();

        $rating_sum = rating::where('id_product', $product->id_product)->sum('stars_rated');

        $reviews = review::where('id_product', $product->id_product)->get();
        if ($rating->count() > 0) {
            $rating_value = $rating_sum / $rating->count();
        } else {
            $rating_value = 0;
        }

        $user_rating = rating::where('id_product', $product->id_product)->where('id_user', Auth::id())->first();

        //      if($product){
        //    $product_id=$product->id_product;
        //    $verified_purchase=order::where('orders.id_user',Auth::id())
        //    ->join('order_details','orders.id_order','order_details.id_order')
        //    ->where('order_details.id_product',$product_id)->get();
        return view('product-detail', compact('product', 'rating', 'rating_value', 'user_rating', 'reviews', 'count', 'total', 'c', 'cart'));

        // }else{
        //     return redirect()->back()->with('status',"erreur");
        // }
    }
    public function contact()
    {
        $id_user = Auth::id();
        $count = cart::where('id_user', $id_user)->count();
        $c = Cart::where('id_user', $id_user)->get();
        $total = 0;
        $cart = Cart::where('id_user', $id_user)->get();
        foreach ($cart as $carts) {
            $total = $carts->total + $total;
        }
        return view('contact', compact('count', 'cart', 'total', 'c'));
    }

    public function addcontact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'msg' => 'required'
        ]);
        if ($this->isOline()) {
            $email_data = [
                'recipient' => 'meryem.bouchhar@gmail.com',
                'fromEmail' => $request->email,
                'fromName' => $request->name,
                'subject' => $request->subject,
                'body' => $request->msg
            ];
            Mail::send('email-template', $email_data, function ($message) use ($email_data) {
                $message->to($email_data['recipient'])
                    ->from($email_data['fromEmail'], $email_data['fromName'])
                    ->subject($email_data['subject']);
            });
            return redirect()->back()->with('success', 'Email Sent!');
        } else {
            return redirect()->back()->withInput()->with('error', ' Veuillez vérifiez votre connection internet');
        }
    }
    public function isOline($site = "https://youtube.com")
    {
        if (@fopen($site, "r")) {
            return true;
        } else {
            return false;
        }
    }
    public function view_category($id)
    {
        if (category::where('id_categ', $id)->exists()) {
            $category = category::where('id_categ', $id)->first();
            $product = product::where('id_categ', $category->id_categ)->get();
            $id_user = Auth::id();
            $c = Cart::where('id_user', $id_user)->get();
            $count = cart::where('id_user', $id_user)->count();
            $total = 0;
            $cart = Cart::where('id_user', $id_user)->get();
            foreach ($cart as $carts) {
                $total = $carts->total + $total;
            }
            return view("display_product", compact('category', 'product', 'c', 'cart', 'total', 'count'))->with("status", "Aucun produit correspondant");
        } else {
            return redirect('home')->with("status", "Aucun produit correspondant");
        }
    }
    //RATING
    public function add_rating(Request $request)
    {
        $stars_rated = $request->input('rating');
        $product_id = $request->input('id_product');
        $product_check = product::where('id_product', $product_id)->first();
        if ($product_check) {
            $verified_purchase = order::where('orders.id_user', Auth::id())
                ->join('order_details', 'orders.id_order', 'order_details.id_order')
                ->where('order_details.id_product', $product_id)->get();
            if ($verified_purchase) {
                $existing_rating = rating::where('id_user', Auth::id())->where('id_product', $product_id)->first();

                if ($existing_rating) {
                    $existing_rating->stars_rated = $stars_rated;
                    $existing_rating->update();
                } else {
                    rating::create([
                        'id_user' => Auth::id(),
                        'id_product' => $product_id,
                        'stars_rated' => $stars_rated
                    ]);
                    // Alert::success('Congrats', 'You\'ve Successfully Registered');

                }
                return redirect()->back()->with("success", "Merci d'avoir donner votre avis");
            } else {
                return redirect()->back()->with("error", "you cannot rate this product without purchase");
            }
        } else {
            return redirect()->back()->with("error", "the link you follow was broken");
        }
    }
    //REVIEW

    public function add_review(Request $request)
    {
        //  $stars_rated=$request->input('rating');
        $product_id = $request->input('id_productt');
        $product = product::where('id_product', $product_id)->first();
        if ($product) {
            // $product_id=$product->id_product;
            // $verified_purchase=order::where('orders.id_user','users.id_user')
            // ->join('order_details','orders.id_order','order_details.id_order')
            // ->where('order_details.id_product',$product_id)->get();
            // return view('product-detail', compact('product' ,'verified_purchase'));
            $user_review = $request->input('review');
            $new_review = review::create([
                'id_user' => Auth::id(),
                'id_product' => $product_id,
                'review' => $user_review
            ]);
            $category = $product->category->name_categ;
            $designation = $product->designation;
            if ($new_review) {
                //   return redirect('category/'.$category.'/'.$designation)->with('status',"thank you for writing a review");
                return redirect()->back();
            }
        } else {
            return redirect()->back(); //the link was broken
        }
    }
    public function delete_review($id)
    {
        $data = review::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Review deleted successfully');
    }
    public function edit_review(Request $request)
    {
        $user_review = $request->input('review');
        if ($user_review != '') {
            $review_id = $request->input('review_id');
            $review = review::where('id_review', $review_id)->where('id_user', Auth::id())->first();
            if ($review) {
                $review->review = $request->input('review');
                $review->update();
                return  view("display_product", compact('review', 'user_review'))
                    ->with('status', "Review updated successfully");
            }
        } else {
            return redirect()->back(); //you cannot submit an empty review

        }
    }
    public function product_list()
    {

        $products = product::select('designation')->get();
        $data = [];
        foreach ($products as $item) {
            $data[] = $item['designation'];
        }
        return $data;
    }
    public function searchproduct(Request $request)
    {
        $id_user = Auth::id();
        $c = Cart::where('id_user', $id_user)->get();
        $total = 0;

        $count = cart::where('id_user', $id_user)->count();
        $cart = Cart::where('id_user', $id_user)->get();
        foreach ($cart as $carts) {
            $total = $carts->total + $total;
        }
        //   $searched_product=$request->product_name;
        //   if($searched_product !=""){

        //     $product=product::where('designation',"LIKE","%$searched_product%")->first();
        //     if( $product){
        //         return redirect('view_category/'.$product->category->id_categ.'/'.$product->id_product);
        //    }else{
        //         return redirect()->back()->with("status","No product matched ");
        //     }
        //   }else{
        //       return redirect()->back();
        //   }
        //  $request->validate([
        //      'product_name'=>'required|min:3',
        //  ]);

        $searched_product = $request->product_name;
        $product = product::where('designation', 'like', "%$searched_product%")
            ->orwhere('description', 'like', "%$searched_product%")->get();


        return view('search', compact('product', 'total', 'cart', 'c', 'count'));
    }
    public function checkout()
    {
        // if (Cart::count() <= 0) {
        // return redirect()->route('home');
        // } else {
        $id_user = Auth::id();
        $count = Cart::where('id_user', $id_user)->count();
        $carts = Cart::where('id_user', $id_user)->get();
        $c = Cart::where('id_user', $id_user)->get();
        $total = 0;
        foreach ($carts as $cart) {
            $total = $cart->total + $total;
        }

        return view('checkout', compact('count', 'total', 'carts', 'c'));
        // }
    }

    public function cart()
    {
        $id_user = Auth::id();

        $cart = Cart::where('id_user', $id_user)->get();
        $c = Cart::where('id_user', $id_user)->get();
        $total = 0;
        foreach ($cart as $carts) {
            $total = $carts->total + $total;
        }

        $count = Cart::where('id_user', $id_user)->count();
        return view('cart', compact('count', 'cart', 'total', 'c'));
    }
    public function addcart(Request $request, $id)
    {
        $check = Cart::where('id_product', $id)->first();
        $product = product::find($id);
        if ($check) {
            if ($product->quantity >= $request->quantity) {
                Cart::where('id_product', $id)->update([
                    'quantity' => $request->quantity,
                    'total' => $request->quantity * $product->price
                ]);
                return redirect()->back();
            } else {
                return redirect()->back()->with('error', "Nous n'avons actuellement pas assez d'articles en stock.");
            }
        } elseif (Auth::id()) {

            $id_user = Auth::id();

            $price = $product->price;
            $id_product = $id;
            $quantity = $request->quantity;


            $cart = new Cart;

            $cart->id_user = $id_user;
            $cart->id_product = $id_product;
            $cart->quantity = $quantity;
            $cart->total = $quantity * $price;
            $cart->save();
            return redirect()->back();
        } else {
            return redirect('login');
        }
    }

    public function deleteproduct($id_cart)
    {

        $cart = Cart::find($id_cart);
        $cart->delete();
        return redirect()->back();
    }
    public function placeOrder(Request $request)
    {
        $id_user = Auth::id();
        $exist_user = DetailLivraison::where('id_user', Auth::id())->first();
        if ($exist_user) {

            $exist_user->lastName = $request->input('lname');
            $exist_user->firstName = $request->input('fname');
            $exist_user->email = $request->input('email');
            $exist_user->city = $request->input('city');
            $exist_user->country = $request->input('country_name');
            $exist_user->adresse = $request->input('address');
            $exist_user->Numero = $request->input('number');
            $exist_user->zipCode = $request->input('post');
            // $exist_user->id =  $id_user;
            $exist_user->update();
            $id_liv = $exist_user->id_detailLivraison;
        } else {
            $livraison = new DetailLivraison;
            $livraison->lastName = $request->input('lname');
            $livraison->firstName = $request->input('fname');
            $livraison->email = $request->input('email');
            $livraison->city = $request->input('city');
            $livraison->country = $request->input('country_name');
            $livraison->adresse = $request->input('address');
            $livraison->Numero = $request->input('number');
            $livraison->zipCode = $request->input('post');
            $livraison->id_user = $id_user;
            $livraison->save();
            $id_liv = $livraison->id_detailLivraison;
        }


        $cart = Cart::where('id_user', $id_user)->get();
        $carts = Cart::where('id_user', $id_user)->get();
        $total = 0;
        foreach ($cart as $cart) {
            $total  = +$cart->total;
        }
        $order = new order();
        $order->total =  $total;
        $order->id_user =  $id_user;
        $order->id_detailLivraison = $id_liv;
        $order->save();

        $order->id_order;
        foreach ($carts as $carts) {
            order_detail::create([
                'id_order' => $order->id_order,
                'id_product' => $carts->id_product,
                'quatity' => $carts->quantity,
                'price' => $carts->products->price,

            ]);
        }
        // $cart = Cart::where('id_user', $id_user)->get();
        // Cart::destroy($cart);
        return redirect()->back();
    }
    public function allpromo(Request $request)

    {
        $id_user = Auth::id();
        $count = cart::where('id_user', $id_user)->count();
        $c = Cart::where('id_user', $id_user)->get();
        $promo = promotion::all();
        $data = product::whereNotNull('id_promo')->get();
        $total = 0;
        $cart = Cart::where('id_user', $id_user)->get();
        foreach ($cart as $carts) {
            $total = $carts->total + $total;
        }
        return view('promotion', compact('promo', 'data', 'count', 'c', 'cart', 'total'));
    }
    public function promoo(Request $request, $id)
    {

        if (promotion::where('id_promo', $id)->exists()) {
            $id_user = Auth::id();
            $count = cart::where('id_user', $id_user)->count();
            $c = Cart::where('id_user', $id_user)->get();
            $promo = promotion::all();
            $promoo = promotion::where('id_promo', $id)->first();
            $dataa = product::where('id_promo', $promoo->id_promo)->get();
            $total = 0;
            $cart = Cart::where('id_user', $id_user)->get();
            foreach ($cart as $carts) {
                $total = $carts->total + $total;
            }
            return view("promotion_view", compact('dataa', 'promoo', 'promo', 'count', 'c', 'cart', 'total'))->with("status", "No product matched ");
        } else {
            //  $promoo=promotion::all();
            //  $data = product::whereNotNull('id_promo')->get();
        }
    }
}

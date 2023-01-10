<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

use App\Models\promotion;
use App\Models\product;
use App\Models\order;
use App\Models\detail_order;
use App\Models\DetailLivraison;
use App\Models\order_detail;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    ///CETEGORY
    public function view_category()
    {
        $data = category::all();
        return view('admin.category', compact('data'));
    }
    public function list_category()
    {

        $category = category::select('name_categ')->get();
        $data = [];
        foreach ($category as $item) {
            $data[] = Str::lower($item['name_categ']);
        }
        return $data;
    }
    public function add_category(Request $request)
    {
        //  $this ->validate( $request,[
        //      'name_categ'=>[
        //        'required',
        //        Rule::unique('categories')
        //      ],
        //    ]);

        $data = new category;
        $data->name_categ = Str::lower($request->category);
        //   $category = category::select('name_categ')->get();
        // $dat = [];
        // foreach ( $category as $item) {
        //     $dat[] = Str::lower($item['name_categ']);
        //       if($data->name_categ===$dat){
        //     return redirect()->back()->with('message','error');
        //   }






        //   else{
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('category', $imagename);
        $data->img_categ = $imagename;
        $data->save();
        return redirect()->back()->with('message', 'Category added successfully');
        // }}
    }
    public function delete_category($id)
    {
        $data = category::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Category deleted successfully');
    }

    public function edit_category($id)
    {
        $data = category::find($id);
        return view('admin.edit_category', compact('data'));
    }

    public function update_category(Request $request, $id)
    {
        $data = category::find($id);
        $data->name_categ = $request->category;
        $image = $request->image;
        if ($image) //if there is image
        {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('category', $imagename);
            $data->img_categ = $imagename;
        }

        $data->save();
        return redirect()->back()->with('message', 'Category edited successfully');
    }

    ///PRODUCT
    public function view_product()
    {
        $category = category::all();
        $promotion = promotion::all();
        return view('admin.product', compact('category', 'promotion'));
    }
    public function add_product(Request $request)
    {
        $product = new product;
        // $category=new category;
        $product->designation = $request->designation;
        $product->description = $request->description;
        $product->id_categ = $request->category;
        $product->id_promo = $request->promotion;
        $product->quantity = $request->quantity;

        if ($product->id_promo != "") {
            $product->price = $request->price * (100 - $product->promotion->discount) / 100;
            $product->old_price = $request->price;
        } else {
            $product->price = $request->price;
            $product->old_price = $request->oldprice;
        }
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('product', $imagename);
        $product->image = $imagename;
        $product->save();
        return redirect()->back()->with('message', 'Product added successfully');
    }

    public function show_product(Request $request)
    {

        $data = product::ALL();
        $category = category::all();
        $promotion = promotion::all();

        $searched_product = $request->product_name;
        if ($searched_product) {
            $data = product::where('designation', 'like', "%$searched_product%")
                ->orwhere('description', 'like', "%$searched_product%")->get();
        }
        return view('admin.show_product', compact('data'));
    }
    public function edit_product($id)
    {
        $category = category::all();
        $promotion = promotion::all();
        $data = product::find($id);

        return view('admin.edit_product', compact('data', 'category', 'promotion'));
    }
    public function update_product(Request $request, $id)
    {

        $product = product::find($id);
        $product->designation = $request->designation;
        $product->description = $request->description;
        $product->id_categ = $request->category;
        $product->quantity = $request->quantity;
        $product->id_promo = $request->promotion;
        if ($product->id_promo != "") {
            $product->price = $request->price * (100 - $product->promotion->discount) / 100;
            $product->old_price = $request->price;
        } else {
            $product->price = $request->price;
            $product->old_price = $request->oldprice;
        }
        $image = $request->image;
        if ($image) //if there is image
        {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('product', $imagename);
            $product->image = $imagename;
        }

        $product->save();
        return redirect()->back()->with('message', 'Product edited successfully');
    }
    public function delete_product($id)
    {
        $data = product::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Product deleted successfully');
    }
    public function view_promotion()
    {
        $promotion = promotion::all();
        return view('admin.promotion', compact('promotion'));
    }
    public function add_promotion(Request $request)
    {
        $promotion = new promotion;
        // $category=new category;
        $promotion->designation = $request->designation;
        $promotion->discount = $request->discount;
        $promotion->dateD = $request->dateD;
        $promotion->dateF = $request->dateF;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('promotion', $imagename);
        $promotion->img_promo = $imagename;
        $promotion->save();
        return redirect()->back()->with('message', 'Promotion added successfully');
    }
    public function show_promotion()
    {

        $promotion = promotion::all();
        return view('admin.show_promotion', compact('promotion'))->with(["show_product" => product::latest()->paginate(5)]);
    }
    public function edit_promotion($id)
    {
        $promotion = promotion::find($id);
        return view('admin.edit_promotion', compact('promotion'));
    }
    public function update_promotion(Request $request, $id)
    {

        $promotion = promotion::find($id);
        $promotion->designation = $request->designation;
        $promotion->discount = $request->discount;
        $promotion->dateD = $request->dateD;
        $promotion->dateF = $request->dateF;
        $image = $request->image;
        if ($image) //if there is image
        {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('promotion', $imagename);
            $promotion->img_promo = $imagename;
        }
        $promotion->save();
        return redirect()->back()->with('message', 'Promotion edited successfully');
    }
    public function delete_promotion($id)
    {
        $promotion = promotion::find($id);
        $promotion->delete();
        return redirect()->back()->with('message', 'Promotion deleted successfully');
    }
    ///ORDERS
    public function show_orders()
    {
        $users = User::where('usertype', 0)->get();
        $products = product::all();
        $orders = order::all();
        $categories = category::all();
        $order = order::paginate(5);
        $detail = order_detail::all();
        $product = product::all();
        $user = User::all();
        $detailUser = DetailLivraison::all();
        return view('admin.orders', compact('order', 'detail', 'product', 'user', 'detailUser', 'users', 'products', 'orders', 'categories'));
    }
    public function delete_order($id)
    {
        $order = order::find($id);
        $order->delete();
        return redirect()->back()->with('message', 'order deleted successfully');
    }
    public function edit_order(Request $request, $id)
    {
        $order = order::find($id);
        $detail = order_detail::where('id_order', $id)->get();
        $order->update([
            "delivred" => 1
        ]);

        foreach ($detail as $item) {
            $product = product::find($item->product->id_product);
            $product->update(['quantity' => $product->quantity - $item->quatity]);
        }
        return redirect()->back()->with('message', 'updated successfully');
    }
    public function view_detail($id)
    {
        // $order=order::find($id);
        $order = order::where('id_order', $id)->first();
        // $detail=order_detail::all();
        return view('admin.detail_order', compact('order'));
    }
    ///USERS
    public function show_users()
    {
        $user = User::where('usertype', '0')->get();
        return view('admin.users', compact('user'));
    }
    //dashbord
    public function dashbord()
    {
        $users = User::where('usertype', 0)->get();
        $products = product::all();
        $orders = order::all();
        $categories = category::all();
        // $loyal=DetailLivraison::where('id_user',Auth::id())->get();
        return view('admin.home', compact('users', 'products', 'orders', 'categories'));
    }
}

<?php

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function () {
//      return view('home');
//  });
Auth::routes();
// Route::get('/redirect', function () {
//     // Only verified users may enter...
// })->middleware('auth', 'verified');

Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/view_category/{id}', [HomeController::class, 'view_category']);
Route::post('/add_rating', [HomeController::class, 'add_rating']);
Route::post('/add_review', [HomeController::class, 'add_review']);
Route::get('/edit_review/{id}/userview', [HomeController::class, 'ediiit_review']);
Route::put('/edit_review', [HomeController::class, 'edit_review']);
Route::get('/product-list', [HomeController::class, 'product_list']);
Route::post('searchproduct', [HomeController::class, 'searchproduct']);
Route::get('searchproduct', [HomeController::class, 'searchproduct']);
Route::post('addcart/{id}', [HomeController::class, 'addcart']);
Route::get('/cart', [HomeController::class, 'cart']);
Route::get('/deleteproduct/{id_cart}', [HomeController::class, 'deleteproduct']);
Route::post('/placeOrder', [HomeController::class, 'placeOrder']);
Route::get('/checkout', [HomeController::class, 'checkout']);



Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/email',function(){
//     Mail::to("naima.adardor@edu.uiz.ac.ma")->send(new WelcomeMail());
//     return new WelcomeMail;
// });

Route::get('/product-detail/{id}', [HomeController::class, 'detail']);
Route::get('/redirect', [HomeController::class, 'redirect']);
// Route::get('/home', function () {
//     return view('admin.home');
// })->name('admin');

////CATEGORY
Route::get('/view_category', [AdminController::class, 'view_category']);
Route::post('/add_category', [AdminController::class, 'add_category']);
Route::get('/delete_category/{id}', [AdminController::class, 'delete_category']);
Route::post('/update_category/{id}', [AdminController::class, 'update_category']);
Route::get('/edit_category/{id}', [AdminController::class, 'edit_category']);

////PRODUCT
Route::post('/add_product', [AdminController::class, 'add_product']);
Route::get('/view_product', [AdminController::class, 'view_product']);
Route::post('/update_product/{id}', [AdminController::class, 'update_product']);
Route::get('/edit_product/{id}', [AdminController::class, 'edit_product']);
Route::get('/delete_product/{id}', [AdminController::class, 'delete_product']);
Route::get('/show_product', [AdminController::class, 'show_product']);

////PROMOTION
Route::post('/add_promotion', [AdminController::class, 'add_promotion']);
Route::get('/view_promotion', [AdminController::class, 'view_promotion']);
Route::get('/show_promotion', [AdminController::class, 'show_promotion']);
Route::post('/update_promotion/{id}', [AdminController::class, 'update_promotion']);
Route::get('/edit_promotion/{id}', [AdminController::class, 'edit_promotion']);
Route::get('/delete_promotion/{id}', [AdminController::class, 'delete_promotion']);


//Commande
Route::get('/edit_order/{id}', [AdminController::class, 'edit_order']);
Route::get('/show_orders', [AdminController::class, 'show_orders']);
Route::get('/delete_order/{id}', [AdminController::class, 'delete_order']);
Route::get('/view_detail/{id}', [AdminController::class, 'view_detail']);

//CONTACT
Route::get('/contact', [HomeController::class, 'contact']);
Route::post('/addcontact', [HomeController::class, 'addcontact']);
Route::get('/contact_admin', [AdminController::class, 'contact_admin']);
//USERS
Route::get('/show_users', [AdminController::class, 'show_users']);
Route::get('/view_detail_user/{id}', [AdminController::class, 'view_detail_user']);
Route::get('/delete_review/{id}', [HomeController::class, 'delete_review']);
Route::get('/home', [AdminController::class, 'show_orders'])->name('admin');
Route::get('/allpromo', [HomeController::class, 'allpromo']);
Route::get('/promoo/{id}', [HomeController::class, 'promoo']);

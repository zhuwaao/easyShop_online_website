<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\B2BRegisterController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\StripeController ;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ImageController;


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


Auth::routes();

Route::get('/registerb2b', [B2BRegisterController::class, 'registerb2b'])->name('b2b');

Route::get('/', [HomeController::class, 'index'])->name('home');

route::get('/home', [AdminController::class, 'redirect'])->name('admin');

route::get('/home', [SuperAdminController::class, 'redirect'])->name('superAdmin');

route::get('/shopHome/{id}', [HomeController::class, 'shopHome'])->name('shop.home');

Route::get('/product_details/{product_id}/{id}', [HomeController::class, 'product_details']);

route::get('/b2b_section', [HomeController::class, 'b2b_section']);

route::get('/view_category', [AdminController::class, 'view_category']);

route::post('/add_category', [AdminController::class, 'add_category']);

route::get('/delete_category/{id}', [AdminController::class, 'delete_category']);

route::get('/view_product', [AdminController::class, 'view_product']);

route::post('/add_product', [AdminController::class, 'add_product']);

route::get('/show_product', [AdminController::class, 'show_product']);

route::get('/delete_product/{id}', [AdminController::class, 'delete_product']);

route::get('/update_product/{id}', [AdminController::class, 'update_product']);

route::post('/update_product_confirm/{id}', [AdminController::class, 'update_product_confirm']);

route::post('/add_cart/{id}/{shop_name}', [HomeController::class, 'add_cart']);

route::get('/show_cart/{shop_id}', [HomeController::class, 'show_cart']);

route::get('/remove_cart/{id}', [HomeController::class, 'remove_cart']);

route::get('/remove_order/{id}', [HomeController::class, 'remove_order']);

route::get('/stripe/{totalprice}', [HomeController::class, 'stripe']);

Route::post('stripe/{totalprice}', [HomeController::class, 'stripePost'])->name('stripe.post');

route::get('/order', [SuperAdminController::class, 'order']);

route::get('/coming/{id}', [SuperAdminController::class, 'coming']);

route::get('/delivered/{id}', [SuperAdminController::class, 'delivered']);



route::get('/search', [SuperAdminController::class, 'searchdata']);

route::get('/view_users', [SuperAdminController::class, 'view_users']);

route::get('/show_order/{id}', [HomeController::class, 'show_order']);

route::get('/search_product', [HomeController::class, 'search_product'])->name('search_product');

route::get('/delete_user/{id}', [SuperAdminController::class, 'delete_user']);

route::get('/make_superAdmin/{id}', [SuperAdminController::class, 'make_superAdmin']);

route::get('/make_admin/{id}', [SuperAdminController::class, 'make_admin']);

route::get('/make_b2b/{id}', [SuperAdminController::class, 'make_b2b']);

route::get('/make_user/{id}', [SuperAdminController::class, 'make_user']);

Route::post('/reorder/{orderId}', [OrderController::class, 'reorder'])->name('reorder');

route::get('/order_history/{id}', [HomeController::class, 'order_history']);

Route::post('/reorder/{orderId}', [HomeController::class, 'reorder'])->name('reorder');

Route::get('/view_image/{id}', [ImageController::class, 'view'])->name('view_image');

route::get('/aboutUs', [HomeController::class, 'aboutUs']);

Route::get('orders/{email}', [SuperAdminController::class, 'viewItems'])->name('superadmin.view_items');

Route::get('/search_compare/{product_id}/{id}', [HomeController::class, 'search_compare']);

Route::get('/fill_in/{total}/{id}', [HomeController::class, 'fill_in']);

Route::get('/fill_in_subscribe/{total}/{id}', [HomeController::class, 'fill_in_subscribe']);

Route::post('/user_details/{total}/{id}', [HomeController::class, 'user_details']);

Route::post('/user_details_subscribe/{total}/{shop_id}', [HomeController::class, 'user_details_subscribe']);

route::post('/stripe_subscribe/{total}', [StripeController::class,'stripeSubscribe'])->name('stripe_subscribe');


route::get('success', [StripeController::class, 'successTransaction'])->name('success');

route::get('cancel', [StripeController::class,'cancelTransaction'])->name('cancel');

Route::get('/subscribe/{total}', [StripeController::class, 'subscribe']);

Route::get('/about_subscription', [HomeController::class, 'about_subscription']);

Route::get('/about_b2b', [HomeController::class, 'about_b2b']);

Route::get('/users/profile', [HomeController::class, 'edit'])->name('users_edit_profile');

Route::post('users/profile', [HomeController::class, 'users'])->name('users_update_profile');

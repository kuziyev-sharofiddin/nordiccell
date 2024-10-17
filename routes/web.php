<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post( 'admin/login/authenticate', [\App\Http\Controllers\Admin\AuthController::class, 'authenticate'])->name('admin.authenticate');
Route::get( 'admin/login', [\App\Http\Controllers\Admin\AuthController::class, 'login'])->name('admin.login');
Route::get('admin/logout', [\App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('admin.logout');
Route::group(['middleware' => ['auth','role:admin']], function () {
    Route::get('admin/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('admin/parent_categories', \App\Http\Controllers\Admin\ParentCategoryController::class);
    Route::resource('admin/categories', \App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('admin/sub_categories', \App\Http\Controllers\Admin\SubCategoryController::class);
    Route::resource('admin/sub_category_items', \App\Http\Controllers\Admin\SubCategoryItemController::class);
    Route::resource('admin/products', \App\Http\Controllers\Admin\ProductController::class);
    Route::resource('admin/sub_products', \App\Http\Controllers\Admin\SubProductController::class);
    Route::resource('admin/product_images', \App\Http\Controllers\Admin\ProductImageController::class);
    Route::get('admin/product/{product}/images', [\App\Http\Controllers\Admin\GeneralController::class, 'index'])->name('products.images');
    Route::get('admin/product/{product}/sub_products', [\App\Http\Controllers\Admin\GeneralController::class, 'subProduct'])->name('products.sub_products');
    Route::get('admin/users', [\App\Http\Controllers\Admin\GeneralController::class, 'users'])->name('users');
    Route::delete('admin/user/delete{user}', [\App\Http\Controllers\Admin\GeneralController::class, 'userDestroy'])->name('user-destroy');
    Route::get('admin/orders', [\App\Http\Controllers\Admin\OrderController::class, 'orders'])->name('orders');
    Route::delete('admin/order/delete/{order}', [\App\Http\Controllers\Admin\OrderController::class, 'destroy'])->name('order.destroy');
    Route::delete('admin/order-item/delete/{order}', [\App\Http\Controllers\Admin\OrderController::class, 'orderItemDestroy'])->name('orderItem.destroy');
    Route::get('admin/order-items/{order}', [\App\Http\Controllers\Admin\OrderController::class, 'orderItems'])->name('order-items');
    Route::delete('admin/user/delete', [\App\Http\Controllers\Admin\GeneralController::class, 'userDestroy'])->name('user.destroy');
    Route::put('admin/users/{id}', [\App\Http\Controllers\Admin\GeneralController::class,'userChangeStatus'])->name('admin.changeStatus');
});


Route::get('auth/login', [\App\Http\Controllers\Auth\AuthController::class, 'login'])->name('login');
Route::get('auth/logout', [\App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');
Route::get('logout', [\App\Http\Controllers\Auth\AuthController::class, 'logoutIndex'])->name('nordiccell.logout');
Route::post('auth/authenticate', [\App\Http\Controllers\Auth\AuthController::class, 'authenticate'])->name('authenticate');
Route::post('auth/logout', [\App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');
Route::get('auth/register', [\App\Http\Controllers\Auth\AuthController::class, 'register'])->name('register');
Route::post('auth/register_store', [\App\Http\Controllers\Auth\AuthController::class, 'register_store'])->name('register.store');

Route::get('parent-category/{name}/products', [\App\Http\Controllers\Admin\GeneralController::class, 'parentCategory'])->name('parent_category.products');
Route::get('category/{name}/products', [\App\Http\Controllers\Admin\GeneralController::class, 'category'])->name('category.products');
Route::get('sub-category/{name}/products', [\App\Http\Controllers\Admin\GeneralController::class, 'subCategory'])->name('sub_category.products');
Route::get('sub-category-item/{name}/products', [\App\Http\Controllers\Admin\GeneralController::class, 'subCategoryItem'])->name('sub_category_item.products');
Route::get('product-details/{product}', [\App\Http\Controllers\Admin\GeneralController::class, 'productDetails'])->name('product.details');
Route::get('/', [\App\Http\Controllers\Admin\GeneralController::class, 'home']);
Route::get('/all-products', [\App\Http\Controllers\Nordiccell\HomeController::class, 'allProduct'])->name('all-product');
Route::get('/products/search', [\App\Http\Controllers\Nordiccell\HomeController::class, 'search'])->name('products.search');



Route::post('/add/{product}/cart', [\App\Http\Controllers\Nordiccell\CartController::class, 'addCart'])->name('add_cart');
Route::get('/show/cart', [\App\Http\Controllers\Nordiccell\CartController::class, 'showCart'])->name('show_cart');
Route::get('/cart/{cart}/delete', [\App\Http\Controllers\Nordiccell\CartController::class, 'removeCart'])->name('remove_cart');
Route::get('/order', [\App\Http\Controllers\Nordiccell\OrderController::class, 'order'])->name('order');
Route::post('/order', [\App\Http\Controllers\Nordiccell\OrderController::class, 'cashOrder'])->name('order.store');

Route::get('/cart-count', [\App\Http\Controllers\Nordiccell\CartController::class, 'getCartCount']);

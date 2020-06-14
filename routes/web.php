<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/index','testcontroller@index');
//Route::view('/index','index ');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user', 'HomeController@index')->name('user');
Route::post('/craete.register','HomeController@store')->name('create.register');

Route::post('/logout','HomeController@logout')->name('logout');
Route::get('/profile','HomeController@edit')->name('profile');
Route::patch('update/{user}','HomeController@update')->name('user.update');
//contact
Route::get('contact','contactcontroller@create')->name('contact.create')->middleware('auth');
Route::post('contact','contactcontroller@store')->name('contact.store');

//admin

Route::get('/admin','AdminController@index')->name('admin');

Route::resource('/admin/brand','BrandController')->except('create','show');
Route::resource('/admin/category','CategoryController')->except('create','show');
Route::resource('/admin/product','ProductController')->except('show');

Route::get('/addToCart/{product}', 'ProductController@addToCart')->name('cart.add');

Route::get('/shopping-cart', 'ProductController@showCart')->name('cart.show');


Route::resource('/admin/transport','TransportController');
Route::get('/transport',function(){
    return view('transport.index');
})->name('transport');

Route::get('/admin/product/discount','ProductController@discountShow')->name('product.discountShow');
Route::post('/admin/product/discount','ProductController@editDiscount')->name('product.editDiscount');
Route::get('/shop',function(){
    return view('shop',['products'=>App\product::all(),'categories'=>App\category::all(),'brands'=>App\brand::all()]);
})->name('shop_product');


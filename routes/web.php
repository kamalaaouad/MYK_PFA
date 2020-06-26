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

Route::get('/text','ProductController@txt');
Route::view('/kamal','commandes.index');


Route::get('/test',function(){
    return view('test',['products'=>App\product::all(),'categories'=>App\category::all(),'brands'=>App\brand::all()]);
});


Route::get('delete/{id_product}','CardController@deletecart')->name('delete_cart');
//Route::view('/index','index ');

Route::get('/testcart','CardController@viewCart')->middleware('auth');
Route::get('/checkout/{montant}','CardController@checkout')->name('cart.checkout','montant');

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

Route::get('/testcart','CardController@viewCart')->middleware('auth');
Route::get('/checkout/{montant}','CardController@checkout')->name('cart.checkout');

//admin

Route::get('/admin','AdminController@index')->name('admin');

Route::resource('/admin/brand','BrandController')->except('create','show');
Route::resource('/admin/category','CategoryController')->except('create','show');

Route::resource('/admin/product','ProductController')->except('show');
Route::DELETE('/admin/client/{id}','AdminController@destroy')->name('deleted');

route::post('/admin/discount/edit','ProductController@discountEdit')->name('discountEdit');

Route::get('/admin/transporteur','AdminController@transport')->name('transporteur');



Route::get('/addToCart/{product}', 'CardController@addToCart')->name('cart.add');

Route::get('/shopping-cart', 'ProductController@showCart')->name('cart.show');

Route::get('/admin/transporteur','TransportController@index')->name('transporteur');



Route::get('/transport',function(){
    return view('transport.index');
})->name('transport');

/*Route::get('/admin/product/discount','ProductController@discountShow')->name('product.discountShow');
Route::post('/admin/product/discount','ProductController@editDiscount')->name('product.editDiscount');*/
Route::get('/admin/product/{product}/discount','ProductController@discount')->name('product.discount');
Route::post('/admin/product/discount','ProductController@editDiscount')->name('product.editDiscount');
Route::get('/shop',function(){
    return view('shop',['products'=>App\product::all(),'categories'=>App\category::all(),'brands'=>App\brand::all()]);
})->name('shop_product');

Route::get('/shop/category/{id}','ProductController@getByCategory')->name('product_by_category');
Route::get('/shop/brand/{id}','ProductController@getByBrand')->name('product_by_brand');
Route::post('/shop/search','ProductController@searchByName')->name('product_searched');
Route::post('/shop/price','ProductController@getByPrice')->name('product_by_price');



Route::post('/card/Updateqtt/{id_qtt}','CardController@UpdateQtt')->name('update_qtt');


Route::get('/client','AdminController@client');
Route::get('/transports','AdminController@transports');
Route::post('/RegisterTransport','RegisterTransportController@store')->name('register_Transport');

Route::post('/commande','CommandeController@facture')->name('commande');
Route::post('/commandeSave','CommandeController@store')->name('confirm_commande');


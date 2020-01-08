<?php

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

Route::get('/', function () {
  return view('welcome');
});
Route::get('/add-to-cart/{id}',[
'uses'=>'FrontController@getAddToCart',
'as'=>'front.addToCart'
]);

Route::get('/shopping-card',[
'uses'=>'FrontController@getCard',
'as'=>'front.shoppingCart'
]);

Route::get('/reduce/{id}',[
	'uses'=>'FrontController@getReduceByOne',
	'as'=>'front.reduceByOne'
]);

Route::get('/add/{id}',[
	'uses'=>'FrontController@getAddByOne',
	'as'=>'front.addByOne'
]);

Route::get('/addby/{id}',[
	'uses'=>'FrontController@getAddBy',
	'as'=>'front.addBy'
]);

//Route::resource('login','LoginController');
//Route::get('getLogin','LoginController@getLogin');
//Route::get('postLogin','LoginController@postLogin');
Route::resource('log','LogController');
Route::get('logout','LogController@logout');
//Route::get('login','SliderController@login');
Route::resource('slider','SliderController');
Route::resource('category','CategoryController');
Route::resource('video','VideoController');
Route::resource('review','ReviewController');
Route::resource('product','ProductController');
Route::resource('front','FrontController');
Route::get('veg','FrontController@veg');
Route::get('nonveg','FrontController@nonveg');
Route::get('cart','FrontController@cart');
Route::get('/checkout',[
'uses'=>'FrontController@getCheckout',
'as'=>'front.checkout'
]);
//Route::get('checkout','FrontController@checkout');
//Route::resource('front/shop','FrontController@shop');

//Route::post('/cart/add','CartController@addToCart');


//Route::get('/cart', 'Site\CartController@getCart')->name('checkout.cart');
//Route::get('/cart/item/{id}/remove', 'Site\CartController@removeItem')->name('checkout.cart.remove');
//Route::get('/cart/clear', 'Site\CartController@clearCart')->name('checkout.cart.clear');


//Route::resource('/shop','FrontController@shop');

//Route::get('/search','ProductController@search')->name('search');

//Route::controller('frontend','FrontendController');
//Route::group(['prefix'=>'/frontend'],function(){
//Route::get('/','FrontendController@getHomepage');
//});

//Route::group(['prefix'=>'/shop'],function(){
//Route::get('/','FrontendController@getShop');
//});

//Route::group(['prefix'=>'/productsingle'],function(){
//Route::get('/','FrontendController@getProductsingle');
//});



//Route::controller('/shop','FrontendController@getShop')->name('getshop');
//Route::controller('/product-single','FrontendController@getProductsingle')->name('getproductsingle');
//Route::controller('/','FrontendController@getHomepage');


//Route::group(['prefix'=>'/productsingle'],function(){
//Route::get('/','FrontendController@getProductsingle')->name('productsingle');
//});

//Route::group(['prefix'=>'/frontend'],function(){

//});




//Route::get('/','FrontendController@homepage')->name('landing');


//Auth::routes(['register'=>false]);



//Route::get('/Admin/slider', 'HomeController@index')->name('slider');


//Route::get('/slider', 'HomeController@index')->name('slider');
//Route::get('/home', 'HomeController@index')->name('home');

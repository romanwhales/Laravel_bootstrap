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

/*Route::get('/', function () {
    //return view('welcome')->with('name','Wale');
    return view('home.welcome');
});*/
Route::get('/','WelcomeController@index');
Route::get('blog/category/{category}','BlogController@category');
Route::get('/arrays','WelcomeController@arrays');
Route::resource('lists','ListsController');
Route::get('/contact',['as'=>'contact','uses'=>'AboutController@create']);
Route::post('/contact',['as'=>'contact_store','uses'=>'AboutController@store']);
Route::get('/product',['as'=>'product','uses'=>'ProductController@create']);
Route::post('/product',['as'=>'product_store','uses'=>'ProductController@store']);


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::group(['prefix' => 'admin','namespace'=>'admin','middleware'=>'admin'],function(){
	Route::resource('user','UserController');
});

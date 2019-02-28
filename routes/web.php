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
Route::get('/home', 'HomeController@index')->name('home');	
 	

 	Route::post('/fcontact', 'FoodController@store');
 Route::get('/fcontact', function () {
    return view('fcontact');
});
 Route::get('/fpricing', function () {
    return view('fpricing');
});
 	///Route::get('/fpricing', 'FoodController@store');

Route::post('/fcontact', 'fcontactController@store');
Route::post('/resturant', 'resturantController@store');
 Route::get('/resturant', function () {
    return view('resturant');
});
 Route::get('/index', function () {
    return view('index');
}); 
 Route::post('/registration', 'registrationController@store');
Route::get('/registration', function () {
    return view('registration');
});

Route::post('/foodresult', 'FoodController@search');
Route::post('/checkout', 'checkoutController@store');
 Route::get('/checkout', function () {
    return view('checkout');
});

 Route::get('/foodresult', function () {
    return view('foodresult');
});

Route::get('/map', 'FoodController@create');

Route::get('/profile/{id}', 'resturantController@create');

    
   Route::get('/restaurants', function () {
    return view('restaurants');
});
Route::post('/contact', 'contactController@store');
   Route::get('/contact', function () {
    return view('contact');
});
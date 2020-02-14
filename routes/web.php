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

Route::get('/', 'TestController@welcome');
Route::get('terms', function () {
    return view('terms');
});
Route::get('privacy', function () {
    return view('privacy');
});

//DO NOT REMOVE THIS -- This a fix for http://my-best-doctor.uz/healthflex?wc-ajax=get_refreshed_fragments 404 page
Route::get('healthflex', function () {
    return 'healthflex';
});


Route::get('/welcome', 'TestController@welcome');
Route::get('/logout', 'Auth\LoginController@logout');


Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');


Route::get('facebook', function () {
    return view('facebook');
});
Route::get('auth/facebook', 'Auth\FacebookController@redirectToFacebook');
Route::get('auth/facebook/callback', 'Auth\FacebookController@handleFacebookCallback');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

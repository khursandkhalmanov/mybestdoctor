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

############################################################
Route::get('shoxab', 'IndexController@shoxab');
Route::get('lathis', 'IndexController@lathis');
Route::get('khursand', 'IndexController@khursand');
Route::get('farrukh', 'IndexController@farrukh');
Route::get('friend802000', 'IndexController@friend802000');
Route::get('umidochka', 'IndexController@umidochka');
Route::get('jontoshmatov', 'IndexController@jontoshmatov');
Route::get('chat', 'IndexController@chat');
Route::any('openchat', 'IndexController@openchat');
Route::get('airports', 'AirportsController@lists');
############################################################





Route::get('/changeaddress', 'DmvServicesController@sarah');



Route::get('/restaurant','RestaurantMenu@waiter');

Route::get('/formpage', function (){
    return view('insertcolmn');
});
Route::post('/insert','CarColor@insert');

Route::get('/restaurant','RestaurantMenu@waiter');

Route::get('/contactus', 'MarketingController@contactus');
Route::post('/contactus', 'MarketingController@postcontactus');
//put, path, update, delete
Route::get('/restaurant','RestaurantMenu@waiter');


Route::get('/contactus', 'MarketingController@contactus');
Route::post('/contactus', 'MarketingController@postcontactus');
//put, path, update, delete


Route::get('cars', 'CarsController@cars');
Route::post('cars', 'CarsController@insertCars');
Route::post('deletecars', 'CarsController@deleteCars');
Route::get('deletecar', 'CarsController@deleteCar');
Route::post('updateCars', 'CarsController@updateCars');

Route::get('/groceries','GroceriesController@getGroceries');

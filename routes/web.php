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

//Auth::routes();
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@store');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');




//TUTEE
Route::resource('tutee', 'Tutee\TuteeController');



//USER
Route::resource('users', 'User\UserController');
Route::resource('users.tutee', 'User\UserTuteeController')->except(['index']);
Route::resource('users.tutee.session', 'User\UserTuteeSessionController')->except(['index']);

//ITEMS
Route::resource('items', 'Item\ItemController');
Route::resource('items.inventory', 'Item\ItemInventoryController')->only(['store']);

//INVENTORY
Route::resource('inventories', 'Inventory\InventoryController');
Route::resource('inventories.stockin', 'Inventory\InventoryStockInController')->only(['create','store']);
Route::resource('inventories.stockout', 'Inventory\InventoryStockOutController')->only(['create','store']);

//STOCK IN
Route::resource('stockins', 'StockIn\StockInController');

//STOCK OUT
Route::resource('stockouts', 'StockOut\StockOutController');

//API ROUTES
//Route::resource('api/user', 'Api\User\UserController')->only(['index']);
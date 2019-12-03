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


Route::group(['middleware' => 'userCheck'], function (){
    Route::get('/change-password', 'UserAuthenticateController@showChangePassword')->name('user.show.password.change');
    Route::POST('/change-password', 'UserAuthenticateController@changePassword')->name('user.password.change');
    Route::get('/profile/{id}', 'ProfileController@index')->name('user.profile');
    Route::get('/profile/{id}/add-info', 'ProfileController@showAddInfo')->name('user.show.addInfo');
    Route::post('/profile/{id}/add-info', 'ProfileController@addInfo')->name('user.profile.addInfo');
    Route::get('/user/{id}/add-listing', 'UserController@index')->name('user.addListing');
    Route::post('/user/{id}/add-listing', 'UserController@create')->name('user.addListing.create');
    Route::get('/logout', 'UserAuthenticateController@logout')->name('user.logout');
});
Route::get('/', 'UserAuthenticateController@index')->name('home');
Route::get('/admin', 'UserAuthenticateController@dashboard')->name('admin');
Route::post('/login', 'UserAuthenticateController@login')->name('user.login');
Route::post('/register', 'UserAuthenticateController@register')->name('user.register');


//Admin
Route::get('/admin/login', 'AdminController@showLogin')->name('admin.login.show');
Route::post('/admin/login', 'AdminController@login')->name('admin.login');
Route::get('admin/logout', 'AdminController@logout')->name('admin.logout');



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

//User
Route::group(['middleware' => 'userCheck'], function (){
    Route::get('/change-password', 'UserAuthenticateController@showChangePassword')->name('user.show.password.change');
    Route::POST('/change-password', 'UserAuthenticateController@changePassword')->name('user.password.change');
    Route::get('/profile/{id}/add-info', 'ProfileController@showAddInfo')->name('user.show.addInfo');
    Route::post('/profile/{id}/add-info', 'ProfileController@addInfo')->name('user.profile.addInfo');
    Route::get('/user/{id}/add-listing', 'UserController@index')->name('user.addListing');
    Route::post('/user/{id}/add-listing', 'UserController@create')->name('user.addListing.create');
    Route::get('/user/{id}/listing/edit', 'ListingController@editShow')->name('user.listing.edit.show');
    Route::post('/user/{id}/listing/edit', 'ListingController@edit')->name('user.listing.edit');
    Route::get('/user/{id}/listing/delete', 'ListingController@delete')->name('user.listing.delete');
    Route::get('/price/{id}/delete', 'ListingController@priceDelete')->name('price.delete');
    Route::get('/dashboard', 'UserController@dashboard')->name('dashboard');
    Route::get('/dashboard/{id}/booking', 'UserController@booking')->name('booking');
    Route::get('/booking/{id}/approve', 'BookingController@approve')->name('booking.approve');
    Route::get('/booking/{id}/delete', 'BookingController@cancelBooking')->name('booking.cancel');
    Route::get('/message/{id}/user', 'UserController@message')->name('user.message');
    Route::get('user/message/{mid}/details', 'UserController@messageDetails')->name('user.message.details');
    Route::get('user/{uid}/dashboard/listing', 'UserController@dashboardListing')->name('user.dashboard.listing');
    Route::get('user/{uid}/dashboard/review', 'UserController@dashboardReview')->name('user.dashboard.review');
    Route::post('/reply/{mid}/user/{uid}', 'UserController@reply')->name('user.reply');
    Route::get('/user/dashboard/add/listing', 'UserController@addListing')->name('user.dashboard.add-listing');
    Route::get('/user/{uid}/dashboard/profile', 'UserController@profile')->name('user.dashboard.profile');
    Route::get('/user/{uid}/dashboard/profile/update', 'UserController@profileUpdate')->name('user.dashboard.profile-update');
    Route::get('/logout', 'UserAuthenticateController@logout')->name('user.logout');
});

Route::get('/profile/{id}', 'ProfileController@index')->name('user.profile');
Route::get('/', 'UserAuthenticateController@index')->name('home');
Route::get('/user/login', 'UserAuthenticateController@loginIndex')->name('user.login.index');
Route::get('/user/{id}/listing', 'ListingController@index')->name('user.listing');
Route::get('/user/listing', 'ListingController@allListing')->name('user.listing.all');
Route::post('/booking/{lid}/client/{cid}/user/{uid}', 'BookingController@bookingCreate')->name('booking.create');
Route::post('/login', 'UserAuthenticateController@login')->name('user.login');
Route::post('/register', 'UserAuthenticateController@register')->name('user.register');

//Client
Route::post('/client/register', 'ClientController@clientRegister')->name('client.register');
Route::post('/client/login', 'ClientController@clientLogin')->name('client.login');
Route::get('/client/logout', 'ClientController@clientLogout')->name('client.logout');
Route::group(['middleware' => 'clientCheck'], function (){
    Route::get('/client/{id}/profile', 'ClientController@clientProfile')->name('client.profile');
    Route::get('/client/{id}/add-profile', 'ClientController@showAddProfile')->name('client.show.addInfo');
    Route::post('/client/{id}/add-profile', 'ClientController@updateProfile')->name('client.update.addInfo');
    Route::get('/booking-details/{lid}/client/{cid}/{bid}', 'BookingController@bookingDetails')->name('booking.details');
    Route::get('/booking-pay/{bid}/client/{cid}', 'BookingController@payView')->name('booking.pay.view');
    Route::post('/booking-pay/{bid}/client/{cid}', 'BookingController@pay')->name('booking.pay');
    Route::post('/review-post/{lid}/client/{cid}/user/{uid}', 'ReviewController@reviewPost')->name('review.post');
    Route::post('/review-edit/{lid}/client/{cid}', 'ReviewController@reviewEdit')->name('review.edit');
    Route::get('/message/{id}/client', 'ClientController@message')->name('client.message');
    Route::get('/message/{mid}/details', 'ClientController@messageDetails')->name('message.details');
    Route::post('/message/{uid}/client/{cid}', 'ClientController@messageProcess')->name('client.message.process');
    Route::post('/reply/{mid}/client/{cid}', 'ClientController@reply')->name('client.reply');
});




//Admin
Route::group(['middleware' => 'adminCheck'], function (){
    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::get('/admin/userProfile', 'AdminController@profile')->name('admin.user.profile');
    Route::get('/admin/userListing', 'AdminController@listing')->name('admin.user.listing');
    Route::get('admin/user/{id}/listing/delete', 'AdminController@listingDelete')->name('admin.listing.delete');
    Route::get('/admin/user/{id}/delete', 'AdminController@userDelete')->name('admin.user.delete');
});

Route::get('/admin/login', 'AdminController@showLogin')->name('admin.login.show');
Route::post('/admin/login', 'AdminController@login')->name('admin.login');
Route::get('admin/logout', 'AdminController@logout')->name('admin.logout');



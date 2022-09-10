<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Landing
Route::get('/', 'Landing\HomeController@index')->name('landing');
// Detail Produk
Route::get('/produk/{slug}', 'Landing\HomeController@detail')->name('landing.detail');

// Cart
Route::get('/cart', 'Landing\HomeController@cart')->name('landing.cart');
Route::get('cart/{id}', 'Landing\HomeController@prosesCart')->name('landing.cart.save');
Route::post('cart/delete/{id}', 'Landing\HomeController@deleteCart')->name('landing.cart.delete');
// Proses Cart Checkout
Route::get('proses/checkout', 'Landing\HomeController@prosesCheckout')->name('landing.checkout.proses');

Route::get('testing', 'Landing\HomeController@test');
Route::get('coba', 'Landing\HomeController@coba');

// Wishlist
Route::get('wishlist', 'Landing\HomeController@wishlist')->name('landing.wishlist');
Route::get('wishlist/{id}', 'Landing\HomeController@addWishlist')->name('landing.wishlist.add');
Route::post('wishlist/delete/{id}', 'Landing\HomeController@deleteWishlist')->name('landing.wishlist.delete');


// Route::post('cart/proses', 'Landing\HomeController@prosesCheckout')->name('landing.checkout');

Route::get('pesan/{id}', 'Landing\HomeController@pesan')->name('landing.pesan');

Route::get('coba', 'Landing\HomeController@test');


Auth::routes();

Route::post('register/new', 'Auth\RegisterController@registerCustom')->name('new.register');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Admin
require 'admin.php';

// Staff
require 'staff.php';

// User
require 'user.php';

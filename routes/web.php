<?php

use Illuminate\Support\Facades\Auth;
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

Route::group(['prefix' => 'admin', 'middleware' => ['role:super admin']], function()
{
    Route::get('main', 'Dashboard\HomeController@main')->name('admin.dashboard.main');

    // User
    Route::resource('user', 'Dashboard\Admin\Auth\UserController');

    // Role
    Route::resource('role', 'Dashboard\Admin\Auth\RoleController');

    // Permission
    Route::resource('permission', 'Dashboard\Admin\Auth\PermissionController');
});

Route::group(['prefix' => 'staff', 'middleware' => ['role:staff']], function()
{
    Route::get('main', 'Dashboard\Staff\HomeController@home')->name('staff.dashboard.main');

    // Master Data
        // Pendidikan
        Route::resource('master-data/pendidikan', 'Dashboard\Staff\MasterData\PendidikanController');

        // Product
        Route::resource('master-data/product', 'Dashboard\Staff\MasterData\ProductController');
            // Create Image Product
            Route::get('master-data/product/image/{id}', 'Dashboard\Staff\MasterData\ProductController@createImage')->name('admin.dashboard.product.create.image');
            Route::post('master-data/product/image/{id}', 'Dashboard\Staff\MasterData\ProductController@saveCreateImage')->name('admin.dashboard.product.create.image.save');
            // Edit Image Product
            Route::get('master-data/product/image/edit/{id}', 'Dashboard\Staff\MasterData\ProductController@editImage')->name('admin.dashboard.product.edit.image');
            Route::post('master-data/product/image/edit/{id}', 'Dashboard\Staff\MasterData\ProductController@saveEditImage')->name('admin.dashboard.product.edit.image.save');

            // Delete Image Product
            Route::delete('master-data/product/image/delete/{id}', 'Dashboard\Staff\MasterData\ProductController@deleteImage')->name('admin.dashboard.product.delete.image');

        // Metode Pembayaran
        Route::resource('master-data/metode-pembayaran', 'Dashboard\Staff\MasterData\MetodePembayaranController');

    // Data Pembayaran
    Route::get('data-pembayaran', 'Dashboard\Staff\Pembayaran\PembayaranController@index')->name('admin.dashboard.pembayaran.index');
        // Modal Data Profile
        Route::post('data-pembayaran/profile/{id}', 'Dashboard\Staff\Pembayaran\PembayaranController@modalProfile')->name('admin.dashboard.pembayaran.modalProfile');
        // Modal Data Invoice
        Route::post('data-pembayaran/invoice/{id}', 'Dashboard\Staff\Pembayaran\PembayaranController@modalInvoice')->name('admin.dashboard.pembayaran.modalInvoice');
        // Confirm Pembayaran
        Route::post('data-pembayaran/confirm/{id}', 'Dashboard\Staff\Pembayaran\PembayaranController@confirm')->name('admin.dashboard.pembayaran.confirm');

    // Data Chart
    Route::get('chart/count-produk', 'Dashboard\Staff\HomeController@chart_count_produk')->name('chart.count-produk');

    // Pemilik Produk

    Route::get('pemilik-produk/index', 'Dashboard\Staff\PemilikProduk@index')->name('admin.dashboard.pemilik_produk.index');
});

Route::group(['prefix' => 'user', 'middleware' => ['role:user']], function()
{
    Route::get('main', 'Dashboard\User\HomeController@home')->name('user.dashboard.main');

    // Profile
    Route::get('profile', 'Dashboard\User\HomeController@profile')->name('user.dashboard.profile');
    Route::post('profile/{id}', 'Dashboard\User\HomeController@updateProfile')->name('user.dashboard.profile.update');

    // Settings
    Route::get('settings', 'Dashboard\User\HomeController@settings')->name('user.dashboard.settings');
    Route::post('settings/user/{id}', 'Dashboard\User\HomeController@updateUser')->name('user.dashboard.setting.update.user');
    Route::post('settings/password/{id}', 'Dashboard\User\HomeController@updateUserPassword')->name('user.dashboard.setting.update.password');

    // Layanan
    Route::get('layanan', 'Dashboard\User\LayananController@index')->name('user.dashboard.layanan.index');
        // Pembayaran
        Route::get('layanan/daftar/{id}', 'Dashboard\User\LayananController@pembayaran')->name('user.dashboard.layanan.payment');
        // Get Providers
        Route::get('getProviders/{nama_method}', 'Dashboard\User\LayananController@getProviders')->name('user.dashboard.layanan.getProviders');
        // Store Pembayaran
        Route::post('layanan/{id}', 'Dashboard\User\LayananController@storePembayaran')->name('user.dashboard.layanan.payment.store');
        // Bayar To Bank
        Route::get('layanan/pembayaran/{id}', 'Dashboard\User\LayananController@payment')->name('user.dashboard.layanan.pembayaran');
        Route::post('layanan/pembayaran/{id}', 'Dashboard\User\LayananController@savePayment')->name('user.dashboard.layanan.pembayaran.save');

    // Invoice
    Route::get('invoice', 'Dashboard\User\HomeController@invoice')->name('user.dashboard.invoice.index');

});

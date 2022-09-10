<?php

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

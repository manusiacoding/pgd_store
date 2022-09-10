<?php

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
    Route::get('pemilik-produk/index', 'Dashboard\Staff\PemilikProduk\PemilikProdukController@index')->name('admin.dashboard.pemilik_produk.index');
        // Nama Pemilik Produk
        Route::get('pemilik-produk/daftar-pesantren/{slug}', 'Dashboard\Staff\PemilikProduk\PemilikProdukController@nama_pemilik')->name('admin.dashboard.pemilik_produk.nama_pemilik');
        // Detail Pemilik Produk
        Route::get('pemilik-produk/nama-pesantren/{id}', 'Dashboard\Staff\PemilikProduk\PemilikProdukController@detail_pemilik')->name('admin.dashboard.pemilik_produk.detail_pemilik');
});

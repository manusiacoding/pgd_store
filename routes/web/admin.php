<?php

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

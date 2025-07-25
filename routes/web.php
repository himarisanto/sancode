<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Route;

Route::get('/register', Auth\Register::class)->name('register');

Route::get('/login', Auth\Login::class)->name('login');

Route::middleware('auth:customer')->group(function () {
    
    Route::group(['prefix' => 'account'], function () {
        Route::get('/my-orders', Account\MyOrders\Index::class)->name('account.my-orders.index');
        Route::get('/my-orders/{snap_token}', Account\MyOrders\Show::class)->name('account.my-orders.show');
    });

});
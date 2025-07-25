<?php

namespace App\Livewire;

use App\Livewire\Auth\Login;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', Auth\Register::class)->name('register');
Route::get('/login', Auth\Login::class)->name('login');




<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', Auth\Register::class)->name('register');




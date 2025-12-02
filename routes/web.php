<?php

use App\Livewire\Guest\Login;

use App\Livewire\Guest\Welcome;
use Illuminate\Support\Facades\Route;

Route::get('/', Welcome::class)->name('welcome');
Route::get('/login', Login::class)->name('login');

<?php

use App\Livewire\Auth\Dashboard;
use App\Livewire\Auth\Outlite;
use App\Livewire\Guest\Login;

use App\Livewire\Guest\Welcome;
use Illuminate\Support\Facades\Route;

Route::get('/', Welcome::class)->name('welcome');
Route::get('/login', Login::class)->name('login');
Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/outlite', Outlite::class)->name('outlite');

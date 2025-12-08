<?php

use App\Http\Controllers\VerifikasiEmail;
use App\Livewire\Auth\User;
use Illuminate\Http\Request;
use App\Livewire\Auth\Outlet;
use App\Livewire\Auth\Report;
use App\Livewire\Guest\Login;

use App\Livewire\Auth\Register;

use App\Livewire\Guest\Welcome;
use App\Livewire\Auth\Dashboard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Livewire\Elements\VerificationNotice;

Route::get('/', Welcome::class)->name('welcome');
Route::get('/login', Login::class)->name('login');
Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/outlet', Outlet::class)->name('outlet');
Route::get('/user', User::class)->name('user');
Route::get('/report', Report::class)->name('report');

// 1. Rute Pendaftaran
Route::get('/user/register', Register::class)->name('user.register');

// verifikasi
Route::get('/verify-email/{token}', [VerifikasiEmail::class, 'verifyEmail'])->name('verification.verify');

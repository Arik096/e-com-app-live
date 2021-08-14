<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Master\Home;
use App\Http\Livewire\User\Login;
use App\Http\Controllers\User\LoginCheck;

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

Route::get('/', Home::class)->name('HomePage');
Route::get('/login', Login::class)->name('LoginPage');
Route::post('/login', [LoginCheck::class, 'login'])->name('Login');

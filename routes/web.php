<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller0221;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('pelanggan0221', [Controller0221::class, 'pelanggan']);
Route::get('pelanggan0221/cari', [Controller0221::class, 'cari']);
Route::get('home0221', [Controller0221::class, 'home']);
Route::get('home0221/carihome', [Controller0221::class, 'carihome']);
Route::get('edit', [Controller0221::class, 'edit']);

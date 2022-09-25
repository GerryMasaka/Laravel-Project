<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registercontroller;

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
Route::get('/register','App\Http\Controllers\registercontroller@register');

Route::post('/add_julie','App\Http\Controllers\registercontroller@save');

Route::get('/login','App\Http\Controllers\logincontroller@login');

Route::post('/add_gerry','App\Http\Controllers\logincontroller@loginin');
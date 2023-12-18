<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FileController;

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

Route::controller(FileController::class)->group(function () {
    Route::get('index', 'index');
    Route::post('store', 'store')->name('file.store');
});

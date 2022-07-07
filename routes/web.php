<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CentreController;
use App\Http\Controllers\SpaceController;
use App\Http\Controllers\DataController;
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

// Route::get('/map', function () {
//     return view('map');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('centre-point', (CentreController::class));
Route::resource('space', (SpaceController::class));
Route::get('/map', [App\Http\Controllers\MapController::class, 'index'])->name('map.index');
Route::get('/centrepoint/data', [DataController::class, 'centrepoint'])->name('centre-point.data');
Route::get('/spaces/data', [DataController::class, 'spaces'])->name('data-space');

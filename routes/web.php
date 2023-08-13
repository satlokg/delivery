<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Auth::routes();
// Route::get('/register', function(){
//     abort(404);
// });
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('admins',App\Http\Controllers\AdminController::class);
Route::resource('thanas',App\Http\Controllers\ThanaController::class);
Route::resource('vahaks',App\Http\Controllers\VahakController::class);
Route::resource('delivery',App\Http\Controllers\DeliveryController::class);
Route::get('/delv', [App\Http\Controllers\DeliveryController::class, 'delv'])->name('delivery.delv');
Route::post('/status-update/{delivery}', [App\Http\Controllers\DeliveryController::class, 'statusUpdate'])->name('delivery.status.update');
Route::post('/final-update/{delivery}', [App\Http\Controllers\DeliveryController::class, 'finalUpdate'])->name('delivery.final.update');







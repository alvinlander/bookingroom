<?php

use App\Http\Controllers\AvailController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ProfileController;
use TCG\Voyager\Facades\Voyager;
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

Route::middleware('auth')->group(function(){
    Route::get('/', function () {
        return view('dashboard');
    });
    Route::get('/profile',[ProfileController::class,'index'])->name('profile');
    Route::put('/profile',[ProfileController::class,'updateProfile']);
    Route::get('/profile/password-edit',[PasswordController::class,'index'])->name('password.edit');
    Route::put('/profile/password-edit',[PasswordController::class,'edit']);
    Route::get('/availbility-room',[AvailController::class,'index'])->name('availbility');
    Route::post('/availbility-room',[AvailController::class,'checkavail']);
    Route::get('/history',[HistoryController::class,'index'])->name('history');
    Route::post('/history/{uuid}',[HistoryController::class,'eticket'])->name('history.eticket');
    Route::get('/booking',[BookingController::class,'index'])->name('booking');
    Route::post('/booking',[BookingController::class,'book']);
});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

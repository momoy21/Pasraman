<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Activity;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactFormController;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pasraman.homepage');
});

// KEMUNGKINAN DIGANTI
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [HomeController::class, 'index'])->name('pasraman.homepage');
Route::get('/history', [HomeController::class, 'history'])->name('pasraman.history');
Route::get('/activity', [HomeController::class, 'activity'])->name('pasraman.activity');
Route::get('/contactus', [HomeController::class, 'contact'])->name('pasraman.contact');
Route::get('/program', [HomeController::class, 'program'])->name('pasraman.program');
Route::post('/post-message', [ContactFormController::class, 'post_message'])->name('post-message');

Route::get('/dashboard', 'ActivityController@index')->name('dashboard');

Route::get('/dashboard', 'App\Http\Controllers\ActivityController@index')->name('dashboard');

Route::resource('dashboard', ActivityController::class)
    ->middleware('auth');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

require __DIR__.'/auth.php';

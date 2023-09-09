<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();
// Document Routes
Route::get('/', [App\Http\Controllers\DocumentController::class, 'index'])->name('unallocated');

// Referral Routes
Route::get('/with-triager', [App\Http\Controllers\ReferralController::class, 'withTriager'])->name('with-triager');
Route::get('/accepted', [App\Http\Controllers\ReferralController::class, 'accepted'])->name('accepted');
Route::get('/rejected', [App\Http\Controllers\ReferralController::class, 'rejected'])->name('rejected');

// Triage Routes
Route::get('/dashboard', [App\Http\Controllers\ReferralController::class, 'dashboard'])->name('dashboard');
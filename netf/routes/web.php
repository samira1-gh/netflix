<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AmountDonatedControlle;

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

Route::get('contact', function () {
   return view('contact');
});
Route::get('pricing', function () {
   return view('pricing');
});
// Route::get('/', [HomeController::class, 'showTo']);
Route::get('/', [HomeController::class, 'index']);
 
Route::middleware(['auth'])->group(function () {
   Route::resource('/dashboard', DashboardController::class);
});

// Route::get('/donations', [DonationsController::class, 'index'])->name('donations');

Route::resource('/films', FilmsController::class); 
 
 
Route::get('/film/{id}/donate', [FilmsController::class, 'donate']); 
Route::get('home/{id}', [FilmsController::class, 'showTo']); 
 
Route::post('/film/{id}/donate', [FilmsController::class, 'donatesave']); 
Route::get('/film/{id}', [AmountDonatedControlle::class, 'index']); 

Auth::routes();

Route::get('/home', [DashboardController::class, 'index'])->name('home');
 


 
 
 
Route::post('/donate', [AmountDonatedControlle::class, 'store']);
Route::get('/donate', [AmountDonatedControlle::class, 'create']);

 
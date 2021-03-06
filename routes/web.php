<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [HomeController::class, 'index']);
Route::get('about', [HomeController::class, 'aboutUs']);
Route::get('contact', [HomeController::class, 'getContact']);
Route::post('contact', [HomeController::class, 'setContact']);
Route::get('reservation', [HomeController::class, 'getReservation']);
Route::post('reservation', [HomeController::class, 'setReservation']);
Route::get('vehicles', [HomeController::class, 'getVehicles']);
Route::post('vehicles', [HomeController::class, 'setVehicles']);


Route::get('/admin/dashboard', [AdminController::class, 'index']);
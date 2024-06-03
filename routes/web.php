<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\AttractieController;
use App\Http\Controllers\AttractieDetailController;
use App\Http\Controllers\BestellingController;
use App\Http\Controllers\ContactController;

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
    return view('home');
});

Route::get('/test', [TestController::class, 'show']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/tickets', [TicketController::class, 'index']);
Route::get('/order', [TicketController::class, 'openOrder']);
Route::get('/attracties', [AttractieController::class, 'index']);
Route::get('/attractie/{attractie}', [AttractieDetailController::class, 'index']);
Route::get('/tijden', [HomeController::class, 'tijden']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::post('/postOrder', [BestellingController::class, 'postOrder']);
Route::post('/postContact', [ContactController::class, 'postContact']);

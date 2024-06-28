<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\AttractieController;
use App\Http\Controllers\AttractieDetailController;
use App\Http\Controllers\AccomodationController;
use App\Http\Controllers\AccomodationDetailController;
use App\Http\Controllers\BestellingController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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

// Auth middleware
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    
    //User
    Route::get('/getUser/{user}', [UserController::Class, 'get']);
    Route::get('/getUsers', [UserController::Class, 'getAll']);
    Route::get('/newUser', [UserController::Class, 'new']);
    Route::post('/addUser', [UserController::Class, 'add']);
    Route::post('/putUser/{user}', [UserController::class, 'update']);
    Route::get('/deleteUser/{user}', [UserController::class, 'remove']);

    //Attractie
    Route::get('/getAttractie/{attractie}', [AttractieController::Class, 'get']);
    Route::get('/getAttracties', [AttractieController::Class, 'getAll']);
    Route::get('/newAttractie', [AttractieController::Class, 'new']);
    Route::post('/addAttractie', [AttractieController::Class, 'add']);
    Route::post('/putAttractie/{attractie}', [AttractieController::class, 'update']);
    Route::get('/deleteAttractie/{attractie}', [AttractieController::class, 'remove']);

    //Accomodations
    Route::get('/getAccomodation/{accomodation}', [AccomodationController::Class, 'get']);
    Route::get('/getAccomodations', [AccomodationController::Class, 'getAll']);
    Route::get('/newAccomodation', [AccomodationController::Class, 'new']);
    Route::post('/addAccomodation', [AccomodationController::Class, 'add']);
    Route::post('/putAccomodation/{accomodation}', [AccomodationController::class, 'update']);
    Route::get('/deleteAccomodation/{accomodation}', [AccomodationController::class, 'remove']);

});
 
// Auth routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
 
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

//Get
Route::get('/test', [TestController::class, 'show']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/tickets', [TicketController::class, 'index']);
Route::get('/order', [TicketController::class, 'openOrder']);
Route::get('/attracties', [AttractieController::class, 'index']);
Route::get('/attractie/{attractie}', [AttractieDetailController::class, 'index']);
Route::get('/accomodations', [AccomodationController::class, 'index']);
Route::get('/accomodation/{accomodation}', [AccomodationDetailController::class, 'index']);
Route::get('/tijden', [HomeController::class, 'tijden']);
Route::get('/contact', [HomeController::class, 'contact']);



//Post
Route::post('/postOrder', [BestellingController::class, 'postOrder']);
Route::post('/postBooking', [BookingController::class, 'postBooking']);
Route::post('/postContact', [ContactController::class, 'postContact']);

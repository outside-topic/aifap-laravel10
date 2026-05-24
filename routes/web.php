<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SendMailController;
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

Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'home');
    Route::get('/about', 'about');
    Route::get('/certification', 'certification');
    Route::get('/membership', 'membership');
    Route::get('/corporate-trainning', 'corporateTrainning');
    Route::get('/partnership', 'partnership');
    Route::get('/contact', 'contact');
    Route::get('/verification', 'verification');
    Route::get('/policies', 'policies');
});

Route::controller(SendMailController::class)->group(function(){
    Route::post('/contact-mail', 'contactMail');
    Route::post('/member-apply-mail', 'memberApplicationMail');
});

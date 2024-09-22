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

Route::get('/Dashboard', function () {
    return view('landingPage');
});

// Route::get('landingPage', function () {
//     return view('welcome');
// });

Route::get('/landingPage',[LandingPageController::class,'index']);
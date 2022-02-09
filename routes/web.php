<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\loginController;
use App\http\controllers\userController;

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

Route::get('registration', [userController::class, 'registrationForm']);
Route::post('registration', [userController::class, 'create'])->name('register');

Route::get('login', [loginController::class, 'loginForm']);
Route::post('login', [loginController::class, 'login'])->name('login');
Route::get('dashboard', [loginController::class, 'dashboard']);
Route::get('signOut', [loginController::class, 'signOut']);


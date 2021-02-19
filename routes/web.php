<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landinPageController;

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

Route::get('/', [landinPageController::class, 'homePage']);
Route::get('/index', [landinPageController::class, 'homePage']);
Route::get('/home', [landinPageController::class, 'homePage']);
Route::get('/about', [landinPageController::class, 'aboutPage']);
Route::get('/company', [landinPageController::class, 'companyProfilePage']);
Route::get('/company-profile', [landinPageController::class, 'companyProfilePage']);
Route::get('/portfolio', [landinPageController::class, 'portfolioPage']);
Route::get('/out-portfolio', [landinPageController::class, 'portfolioPage']);
Route::get('/supports', [landinPageController::class, 'supportPage']);
Route::get('/supporter', [landinPageController::class, 'supportPage']);
Route::get('/our-support', [landinPageController::class, 'supportPage']);
Route::get('/our-team', [landinPageController::class, 'teamPage']);
Route::get('/team', [landinPageController::class, 'teamPage']);
Route::get('/contact', [landinPageController::class, 'contactPage']);










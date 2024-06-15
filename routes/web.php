<?php

use App\Http\Controllers\Web\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Login\AdminLoginController;
use App\Http\Controllers\Pages\PagesController;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Booking\BookingController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\Review\ReviewController;
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
Route::get('auth',[AdminLoginController::class,'admin_login'])->name('admin_login');

Route::post('admin-login-check',[AdminLoginController::class,'admin_login_check'])->name('admin_login_check');

Route::get('/',[PageController::class, 'index'])->name('home');




//========================Frontend Pages==========================//

Route::get('/',[PagesController::class, 'index_page']);
Route::get('/about',[PagesController::class, 'about_page']);
Route::get('/service',[PagesController::class, 'service_page']);
Route::get('/contact',[PagesController::class, 'contact_page']);
Route::get('/menu',[PagesController::class, 'menu_page']);
Route::get('/testimonial',[PagesController::class, 'testimonial_page']);
Route::get('/team',[PagesController::class, 'team_page']);
Route::get('/booking',[PagesController::class, 'booking_page']);
//-------------------------Frontend Form Submit-----------------------//
Route::post('/save-booking',[BookingController::class, 'booking_view']);
Route::post('/save-contact',[ContactController::class, 'contact']);

//======================Login=====================================//
Route::get('/admin_login',[LoginController::class, 'login']);
Route::get('/admin_signup',[LoginController::class, 'signup']);
Route::post('/save-signup',[LoginController::class, 'save_signup']);
Route::post('/login_check',[LoginController::class, 'login_chk']);
//------------------------Logout-----------------------------------//
Route::get('/admin_logout',[LoginController::class, 'logout']);
//------------------------Menu-data-fetch----------------------------//
Route::get('/breakfast',[PagesController::class, 'breakfast']);
Route::get('/lunch',[PagesController::class, 'lunch']);
Route::get('/dinner',[PagesController::class, 'dinner']);

//------------------------------Save Review--------------------------//
Route::post('/save-review',[ReviewController::class, 'save']);

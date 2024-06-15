<?php

use App\Http\Controllers\Admin\Cms\CmsController;
use App\Http\Controllers\Admin\ContactInfo\ContactInfoController;
use App\Http\Controllers\Admin\SiteInformation\SiteInformationController;
use App\Http\Controllers\Admin\Team\TeamMamebrController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\Profile\ProfileController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Menu\MenuController;
use App\Http\Controllers\Service\ServiceController;
use App\Http\Controllers\Review\ReviewController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\Booking\BookingController;
use App\Http\Controllers\About\AboutController;
use App\Http\Controllers\AboutImage\AboutImageController;
use App\Http\Controllers\Team\TeamController;
use App\Http\Controllers\Others\OthersController;

Route::group(['as' => 'admin::', 'prefix' => 'v1/cpanel/admin', 'middleware' => ['web', 'AdminMiddleware', 'revalidate']], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    /*** Profile Routes Start ***/
    Route::get('/profile/{name}', [ProfileController::class, 'profile'])->name('profile');
    Route::post('/profile-update', [ProfileController::class, 'profile_update'])->name('profile_update');
    Route::post('/password-update', [ProfileController::class, 'password_update'])->name('password_update');
    Route::get('/admin-logout', [ProfileController::class, 'admin_logout'])->name('admin_logout');
    /*** Profile Routes End ***/

     /*** Site Information Start ***/
     Route::get('/information',[SiteInformationController::class,'information'])->name('information');
     Route::get('/information-add',[SiteInformationController::class,'information_add'])->name('information_add');
     Route::post('/information-save',[SiteInformationController::class,'information_save'])->name('information_save');
     Route::get('/information-edit/{id}',[SiteInformationController::class,'information_edit'])->name('information_edit');
     /*** Site Information End ***/

    /*** CMS Start ***/
    Route::get('/heading',[CmsController::class,'index'])->name('cms');
    Route::get('/heading-edit/{key}',[CmsController::class,'edit'])->name('edit_cms');
    Route::post('/heading-save',[CmsController::class,'save'])->name('save_cms');
    Route::post('/heading-status',[CmsController::class,'status'])->name('status_cms');
    /*** CMS End ***/

    /*** Conatct Information Start ***/
    Route::get('/contact',[ContactInfoController::class,'index'])->name('contact');
    Route::get('/edit-contact/{id}',[ContactInfoController::class,'edit'])->name('edit_contact');
    Route::post('/update-contact/{id}',[ContactInfoController::class,'update'])->name('update_contact_info');
    Route::post('/status-contact',[ContactInfoController::class,'status'])->name('status_contact');
    /*** Conatct Information End ***/


    /*** Team Member Start ***/
    Route::get('/team-member',[TeamMamebrController::class,'index'])->name('team_member');
    Route::get('/add-team-member',[TeamMamebrController::class,'add'])->name('add_team_member');
    Route::post('/save-team-member',[TeamMamebrController::class,'save'])->name('save_team_member');
    Route::get('/edit-team-member/{id}',[TeamMamebrController::class,'edit'])->name('edit_team_member');
    Route::post('/update-team-member/{id}',[TeamMamebrController::class,'update'])->name('update_team_member');
    Route::get('/delete-team-member/{id}',[TeamMamebrController::class,'delete'])->name('delete_team_member');
    Route::post('/status-team-member',[TeamMamebrController::class,'status'])->name('status_team_member');
    /*** Team Member End ***/

 
//------------------------------About Section---------------------------------//
Route::get('/add_about',[AboutController::class, 'add'])->name('add_about');
Route::get('/index_about',[AboutController::class, 'index'])->name('index_about');
Route::post('/save-about',[AboutController::class, 'save'])->name('save_about');
Route::get('/edit_about{id}',[AboutController::class, 'edit'])->name('edit_about');
Route::post('/update_about',[AboutController::class, 'update'])->name('update_about');
Route::get('/delete_about{id}',[AboutController::class, 'delete'])->name('delete_about');

//---------------------------------About Image---------------------------------//

Route::get('/add_image',[AboutImageController::class, 'add'])->name('add_image');
Route::post('/save_image',[AboutImageController::class, 'save'])->name('save_image');
Route::get('/index_image',[AboutImageController::class, 'index'])->name('index_image');
Route::get('/edit_image/{id}',[AboutImageController::class, 'image_edit'])->name('edit_image');
Route::post('/image_update',[AboutImageController::class, 'image_update'])->name('image_update');
Route::get('/delete_image{id}',[AboutImageController::class, 'image_delete'])->name('delete_image');

//-------------------------------------Our Team--------------------------------------//

Route::get('/view-team',[TeamController::class, 'view'])->name('view-team');
Route::post('/save-team',[TeamController::class, 'save_team'])->name('save-team');
Route::get('/team-index',[TeamController::class, 'index_team'])->name('team-index');
Route::get('/edit-team{id}',[TeamController::class, 'team_edit'])->name('edit-team');
Route::post('/team-update',[TeamController::class, 'update_team'])->name('team-update');
Route::get('/delete-team{id}',[TeamController::class, 'delete'])->name('delete-team');

//----------------------Item Menu-------------------------------------------//

Route::get('/food-menu',[MenuController::class, 'view_menu'])->name('food-menu');
Route::post('/save-menu',[MenuController::class, 'save_menu'])->name('save-menu');
Route::get('/menu-index',[MenuController::class, 'index_menu'])->name('menu-index');
Route::get('/edit-item{id}',[MenuController::class, 'item_edit'])->name('edit-item');
Route::post('/update-team',[MenuController::class, 'team_update'])->name('update-team');
Route::get('/delete-item{id}',[MenuController::class, 'item_delete'])->name('delete-item');

//-------------------------Service--------------------------------------------//

Route::get('/add-service',[ServiceController::class, 'service_view'])->name('add-service');
Route::post('/save-service',[ServiceController::class, 'service_save'])->name('save-service');
Route::get('/index-service',[ServiceController::class, 'service_index'])->name('index-service');
Route::get('/service-edit{id}',[ServiceController::class, 'edit_service'])->name('service-edit');
Route::post('/service-update',[ServiceController::class, 'service_update'])->name('service-update');
Route::get('/delete-service{id}',[ServiceController::class, 'delete'])->name('delete-service');

//----------------------------Review------------------------------------------//

Route::get('/add-review',[ReviewController::class, 'add'])->name('add-review');
Route::get('/index-review',[ReviewController::class, 'index'])->name('index-review');
Route::get('/edit-review{id}',[ReviewController::class, 'edit'])->name('edit-review');
Route::post('/update-review',[ReviewController::class, 'update'])->name('update-review');
Route::get('/delete-review{id}',[ReviewController::class, 'delete'])->name('delete-review');
//--------------------------Contact-------------------------------------------//

Route::get('/get-contact',[ContactController::class, 'contact_data'])->name('get-contact');
Route::get('/delete-contact{id}',[ContactController::class, 'delete_data'])->name('delete-contact');

//--------------------------Booking--------------------------------------------//

//-------------------------add booking from admin side-------------------------//
Route::get('/add-booking',[BookingController::class, 'booking_add'])->name('add-booking');
Route::post('/save-bookingdata',[BookingController::class, 'save_bookingdata'])->name('save-bookingdata');
Route::get('/edit-booking{id}',[BookingController::class, 'edit_booking'])->name('edit-booking');
Route::post('/update-booking',[BookingController::class, 'update_booking'])->name('update-booking');

Route::get('/booking-data',[BookingController::class, 'booking_data'])->name('booking-data');
Route::get('/booking-delete{id}',[BookingController::class, 'booking_delete'])->name('booking-delete');  

//-----------------------------------Others-------------------------------------------//
Route::get('/link-add',[OthersController::class, 'add_link'])->name('link-add');
Route::post('/link-save',[OthersController::class, 'save_link'])->name('link-save');
Route::get('/link-index',[OthersController::class, 'index_link'])->name('link-index');
Route::get('/link-edit{id}',[OthersController::class, 'edit_link'])->name('link-edit');
Route::post('/link-update',[OthersController::class, 'update_link'])->name('link-update');
Route::get('/link-delete{id}',[OthersController::class, 'delete_link'])->name('link-delete');
});

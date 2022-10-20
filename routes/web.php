<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Middleware\DashboardMiddleware;
use App\Http\Controllers\MunuController;
use App\Http\Controllers\SubMenuController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\CruiseThreeController;
use App\Http\Controllers\CruiseFourController;
use App\Http\Controllers\HomeCruiseController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ClientController;

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
// WEBSIE ROUTE HERE
Route::get('/', [FrontendController::class, 'homeView']);
Route::get('/about-us',  [FrontendController::class, 'aboutUs'])->name('about-us');
Route::get('/sundarban',  [FrontendController::class, 'Sundarban'])->name('sundarban');
Route::get('/bangladesh',  [FrontendController::class, 'Bangladesh'])->name('bangladesh');
Route::get('/sea-pearl-cruise-3', [FrontendController::class, 'Cruise3'])->name('sea-pearl-cruise-3');
Route::get('/sea-pearl-cruise-4', [FrontendController::class, 'Cruise4'])->name('sea-pearl-cruise-4');
Route::get('/tour-packages', [FrontendController::class, 'tourPackages'])->name('tour-packages');
Route::get('/tour-package-cuisise-3', [FrontendController::class, 'tourPackagesCruise3'])->name('tour_packages_criose_3');
Route::get('/tour-package-cuisise-4', [FrontendController::class, 'tourPackagesCruise4'])->name('tour_packages_criose_3');
Route::get('/contact-us',  [FrontendController::class, 'contactUs'])->name('contact-us');
Route::get('/offers', [FrontendController::class, 'Offers'])->name('offers');
Route::get('/gallery', [FrontendController::class, 'Gallery'])->name('gallery');
// extanal route
Route::get('/group-booking', [FrontendController::class, 'groupBooking'])->name('group-booking');
Route::get('/download-pdf', [FrontendController::class, 'downloadPdf'])->name('download-pdf');

//ebd
Route::post('/add-client',  [ClientController::class, 'addClient'])->name('add-client');
Route::post('/store-message',  [ClientController::class, 'storeMessage'])->name('store-message');
Route::get('/chat_loader',  [ClientController::class, 'chatLoader'])->name('chat_loader');
//login % Logout
Route::get('/login',[DashboardController::class,'adminLogin'])->name('login');
Route::get('/logout',[DashboardController::class,'Logout'])->name('logout');
Route::post('/admin-login',[DashboardController::class,'adminDashboard'])->name('admin-login');
    // ADMIN ROUTE HERE
        Route::middleware([DashboardMiddleware::class])->group(function(){
        Route::group(['prefix' => 'admin'], function(){
        Route::get('/dashboard', [DashboardController::class, 'Dashboard'])->name('dashboard');
        Route::resource('menu', MunuController::class);
        Route::resource('sub-menu', SubMenuController::class);
        Route::resource('slider', SliderController::class);
        Route::resource('cruise-three', CruiseThreeController::class);
        Route::resource('cruise-four', CruiseFourController::class);
        Route::resource('home-cruise', HomeCruiseController::class);
        Route::resource('gallery', GalleryController::class);
        Route::resource('video', VideoController::class);
        // ADMIN DELETE ITEM ROUTE FROM HERE
        Route::get('/menu-delete/{id}', [MunuController::class, 'destroy'])->name('menu-delete');
        Route::get('/sub-menu-delete/{id}', [SubMenuController::class, 'destroy'])->name('sub_menu-delete');
        Route::get('/slider-delete/{id}', [SliderController::class, 'destroy'])->name('slider-delete');
        Route::get('/cruise-three-delete/{id}', [CruiseThreeController::class, 'destroy'])->name('cruise_three-delete');
        Route::get('/cruise-four-delete/{id}', [CruiseFourController::class, 'destroy'])->name('cruise_four-delete');
        Route::get('/home_cruise-delete/{id}', [HomeCruiseController::class, 'destroy'])->name('home_cruise-delete');
        Route::get('/video-delete/{id}', [VideoController::class, 'destroy'])->name('video-delete');

    });
});
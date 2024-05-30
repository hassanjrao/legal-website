<?php

use App\Http\Controllers\AdminAboutController;
use App\Http\Controllers\AdminAboutTabController;
use App\Http\Controllers\AdminAppointmentController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminHomePageController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes(['register' => false, 'reset' => false, 'verify' => false]);

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about', [HomeController::class, 'aboutUs'])->name('about-us');
Route::get('attorneys', [HomeController::class, 'attorneys'])->name('attorneys');
Route::get('practice-areas', [HomeController::class, 'practiceAreas'])->name('practice-areas');
Route::get('case-studies', [HomeController::class, 'caseStudies'])->name('case-studies');
Route::get('case-studies/{id}', [HomeController::class, 'caseStudy'])->name('case-study');
Route::get('blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');

Route::middleware(["auth"])->group(function () {

    Route::prefix("admin")->name("admin.")->group(function () {
        Route::get("", [AdminDashboardController::class, "index"])->name("dashboard.index");

        Route::resource('home-page', AdminHomePageController::class);

        Route::resource('appointment', AdminAppointmentController::class);

        Route::resource('services', AdminServiceController::class);

        Route::resource('about', AdminAboutController::class);

        Route::resource('about-tabs', AdminAboutTabController::class);


        Route::resource("profile", AdminProfileController::class)->only(["index", "update"]);

    });
});

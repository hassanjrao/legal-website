<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminProfileController;
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
Route::get('blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');

Route::middleware(["auth"])->group(function () {

    Route::prefix("admin")->name("admin.")->group(function () {
        Route::get("", [AdminDashboardController::class, "index"])->name("dashboard.index");


        Route::resource("profile", AdminProfileController::class)->only(["index", "update"]);

    });
});

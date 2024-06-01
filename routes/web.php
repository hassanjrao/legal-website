<?php

use App\Http\Controllers\AdminAboutController;
use App\Http\Controllers\AdminAboutTabController;
use App\Http\Controllers\AdminAppointmentController;
use App\Http\Controllers\AdminAttorneyController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminCaseStudyController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminHomePageController;
use App\Http\Controllers\AdminPracticeAreaController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AdminSeoController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\AdminTestimonialController;
use App\Http\Controllers\CkEditorController;
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

Route::get('symlink', function () {

    symlink('/home/edmontontowncar/public_html/dominicanadvocacygroup.com/backend/storage/app/public', '/home/edmontontowncar/public_html/dominicanadvocacygroup.com/storage');
    echo 'Symlink process successfully completed';
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about', [HomeController::class, 'aboutUs'])->name('about-us');
Route::get('attorneys', [HomeController::class, 'attorneys'])->name('attorneys');
Route::get('practice-areas', [HomeController::class, 'practiceAreas'])->name('practice-areas');
Route::get('case-studies', [HomeController::class, 'caseStudies'])->name('case-studies');
Route::get('case-studies/{id}', [HomeController::class, 'caseStudy'])->name('case-studies.show');
Route::get('blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('blogs/{id}', [HomeController::class, 'blog'])->name('blogs.show');
Route::post('blog/{id}/comment', [HomeController::class, 'blogComment'])->name('blogs.comment');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');


Route::post('ckeditor/upload', [CkEditorController::class, 'upload'])->name('ckeditor.upload');
Route::middleware(["auth"])->group(function () {

    Route::prefix("admin")->name("admin.")->group(function () {
        Route::get("", [AdminDashboardController::class, "index"])->name("dashboard.index");

        Route::resource('home-page', AdminHomePageController::class);

        Route::resource('appointment', AdminAppointmentController::class);

        Route::resource('services', AdminServiceController::class);

        Route::resource('about', AdminAboutController::class);

        Route::resource('about-tabs', AdminAboutTabController::class);

        Route::resource('attorneys', AdminAttorneyController::class);

        Route::resource('practice-areas', AdminPracticeAreaController::class);

        Route::resource('case-studies', AdminCaseStudyController::class);

        Route::resource('blogs', AdminBlogController::class);

        Route::resource('testimonials', AdminTestimonialController::class);

        Route::resource('seo', AdminSeoController::class)->only(["index", "update"]);

        Route::resource("profile", AdminProfileController::class)->only(["index", "update"]);


    });
});

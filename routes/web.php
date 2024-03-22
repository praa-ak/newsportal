<?php

use App\Http\Controllers\AdPageController;
use App\Http\Controllers\Backend\AdvertisementController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CompanyController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\CategoryPageController;
use App\Http\Controllers\Frontend\HomepageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostPageController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomepageController::class, 'home']);
Route::get('/category', [CategoryPageController::class, 'category']);
Route::get('/post', [PostPageController::class, 'post']);
Route::get('/adcreate', [AdPageController::class, 'advertise']);
Route::post('/adstore', [AdPageController::class, 'adstore'])->name('adstore');
Route::post('/subscriber', [BaseController::class, 'subscriber'])->name('substore');
Route::get('/subindex', [BaseController::class, 'subindex'])->name('subindex');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    // Route::get('/admin/company', [CompanyController::class, 'company'])->name('companytable');
    // Route::get('/admin/companycreate', [CompanyController::class, 'create'])->name('companycreate');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route::post('/save-company',[CompanyController::class, 'savecompany'])->name('savecompany');
    // Route::put('/update-company/{id}',[CompanyController::class, 'update'])->name('updatecompany');
    // Route::get('/editcompany/{id}',[CompanyController::class, 'edit'])->name('editcompany');
    // Route::get('/admin/news', [NewsController::class, 'news'])->name('newstable');
    // Route::post('/admin/savenews', [NewsController::class, 'savenews'])->name('savenews');
    // Route::get('/admin/newscreate', [NewsController::class, 'create'])->name('newscreate');
    // Route::get('/admin/editnews/{id}', [NewsController::class, 'edit'])->name('newsedit');
    // Route::put('/admin/updatenews/{id}', [NewsController::class, 'update'])->name('updatenews');
    // Route::delete('/admin/deletetenews/{id}', [NewsController::class, 'delete'])->name('deletenews');

    Route::resource('/admin/company',SettingController::class)->names('company');
    Route::resource('/admin/news',NewsController::class)->names('news');
    Route::resource('/admin/category',CategoryController::class)->names('category');
    Route::resource('/admin/advertisement', AdvertisementController::class)->names('advertise');

});

require __DIR__ . '/auth.php';

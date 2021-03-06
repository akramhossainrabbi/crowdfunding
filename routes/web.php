<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\AboutUs;
use App\Http\Controllers\Admin\CkeditorImageController;
use App\Http\Controllers\Admin\Fundrising;

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


Route::view('/', 'home');
Route::view('/about', 'about-us')->name('about');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::group(['middleware' => 'auth'],function () {
    Route::group(['middleware' => 'role', 'prefix' => 'admin', 'as' => 'admin.'],function () {
        Route::view('/dashboard', 'dashboard')->name('dashboard');
        Route::resource('/settings', SettingController::class)->except([
            'create', 'show', 'edit', 'update', 'destroy'
        ]);
        Route::view('/add-user', 'admin.add-user')->name('add.user');
        Route::get('/about-us', [AboutUs::class, 'index'])->name('about.us');
        Route::post('/about-us', [AboutUs::class, 'update'])->name('about.us.update');
        Route::post('/ckeditor-img', [CkeditorImageController::class, 'store'])->name('ckeditor.img.upload');
        // Route::resource('/fundrising', FundrisingController::class)->except([
        //     'store'
        // ]);
        Route::get('/fundrising', [Fundrising::class, 'index'])->name('fundrising.index');
        Route::get('/fundrising/create', [Fundrising::class, 'create'])->name('fundrising.create');
        Route::get('/fundrising/{id}', [Fundrising::class, 'destroy'])->name('fundrising.destroy');
        Route::get('/fundrising/{id}/edit', [Fundrising::class, 'edit'])->name('fundrising.edit');
        Route::post('/fundrising/{id}/update', [Fundrising::class, 'update'])->name('fundrising.update');
    });
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/commercials', [\App\Http\Controllers\HomeController::class, 'commercials'])->name('commercials');
Route::get('/residentials', [\App\Http\Controllers\HomeController::class, 'residentials'])->name('residentials');
Route::get('/about', [\App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/history', [\App\Http\Controllers\HomeController::class, 'history'])->name('history');
Route::get('/contact', [\App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

Route::get('/admin-login', [\App\Http\Controllers\HomeController::class, 'login'])->name('admin.login');


############## ADMIN ROUTES

Route::group(['middleware' => 'auth'], function () {


    Route::get('/admin', [\App\Http\Controllers\HomeController::class, 'dashboard'])->name('admin.dashboard');

    Route::prefix('admin')->group(function () {

        //ADMINS ROUTES
        Route::get('/dashboard', [\App\Http\Controllers\HomeController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/add-admin', [\App\Http\Controllers\HomeController::class, 'addAdmin'])->name('addAdmin');
        Route::post('/save-admin', [\App\Http\Controllers\HomeController::class, 'saveAdmin'])->name('saveAdmin');
        Route::get('/delete-admin/{id}',  [\App\Http\Controllers\HomeController::class, 'destroyAdmin'])->name('destroyAdmin');

        //PRODUCTS ROUTES
        Route::get('/add-commercial', [\App\Http\Controllers\HomeController::class, 'addCommercial'])->name('addCommercial');
        Route::get('/view-commercials', [\App\Http\Controllers\HomeController::class, 'viewCommercials'])->name('viewCommercials');
        Route::post('/save-commercial', [\App\Http\Controllers\HomeController::class, 'saveCommercial'])->name('saveCommercial');
        Route::get('/delete-commercial/{id}', [\App\Http\Controllers\HomeController::class, 'destroyCommercial'])->name('destroyCommercial');


        //CLIENTS ROUTES
        Route::get('/add-residential', [\App\Http\Controllers\HomeController::class, 'addresidential'])->name('addresidential');
        Route::get('/view-residentials', [\App\Http\Controllers\HomeController::class, 'viewresidentials'])->name('viewresidentials');
        Route::post('/save-residential', [\App\Http\Controllers\HomeController::class, 'saveresidential'])->name('saveresidential');
        Route::get('/delete-residential/{id}', [\App\Http\Controllers\HomeController::class, 'destroyresidential'])->name('destroyresidential');

        //MESSAGES ROUTES
        Route::get('/view-messages', [\App\Http\Controllers\HomeController::class, 'viewMessages'])->name('viewMessages');
        Route::post('/save-message', [\App\Http\Controllers\HomeController::class, 'saveMessage'])->name('saveMessage');
        Route::get('/delete-message/{id}', [\App\Http\Controllers\HomeController::class, 'destroyMessage'])->name('destroyMessage');

        //LAYOUTS ROUTES

        // Home
        // Route::get('/view-home-layout', [\App\Http\Controllers\HomeController::class, 'viewHomeLayout'])->name('viewHomeLayout');
        // Route::get('/edit-home-layout', [\App\Http\Controllers\HomeController::class, 'editHomeLayout'])->name('editHomeLayout');
        // Route::post('/save-home-layout', [\App\Http\Controllers\HomeController::class, 'saveHomeLayout'])->name('saveHomeLayout');


        // Route::get('/furniture-layout', [\App\Http\Controllers\HomeController::class, 'furnitureLayout'])->name('furnitureLayout');
        // Route::get('/about-layout', [\App\Http\Controllers\HomeController::class, 'aboutLayout'])->name('aboutLayout');
        // Route::get('/history-layout', [\App\Http\Controllers\HomeController::class, 'historyLayout'])->name('historyLayout');
        // Route::get('/contact-layout', [\App\Http\Controllers\HomeController::class, 'contactLayout'])->name('contactLayout');
    });
});

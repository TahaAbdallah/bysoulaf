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
Route::get('/furniture', [\App\Http\Controllers\HomeController::class, 'furniture'])->name('furniture');
Route::get('/portfolio', [\App\Http\Controllers\HomeController::class, 'portfolio'])->name('portfolio');
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
        Route::get('/add-product', [\App\Http\Controllers\HomeController::class, 'addProduct'])->name('addProduct');
        Route::get('/view-products', [\App\Http\Controllers\HomeController::class, 'viewProducts'])->name('viewProducts');
        Route::post('/save-product', [\App\Http\Controllers\HomeController::class, 'saveProduct'])->name('saveProduct');
        Route::get('/delete-product/{id}', [\App\Http\Controllers\HomeController::class, 'destroyProduct'])->name('destroyProduct');


        //CLIENTS ROUTES
        Route::get('/add-client', [\App\Http\Controllers\HomeController::class, 'addClient'])->name('addClient');
        Route::get('/view-clients', [\App\Http\Controllers\HomeController::class, 'viewClients'])->name('viewClients');
        Route::post('/save-client', [\App\Http\Controllers\HomeController::class, 'saveClient'])->name('saveClient');
        Route::get('/delete-client/{id}', [\App\Http\Controllers\HomeController::class, 'destroyClient'])->name('destroyClient');

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

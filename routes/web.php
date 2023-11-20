<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlantController;
Route::resource('plants', PlantController::class);

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function() {
    return view('about');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/search', [PlantController::class, 'search'])->name('search');
Route::get('/showplant', [PlantController::class, 'showplant'])->name('showplant');
Route::get('/welcome', [HomeController::class, 'index'])->name('welcome');

Auth::routes();
Route::get('/restricted', [HomeController::class, 'restricted'])->middleware(['is_admin']);
Route::get('admin/adminHome', [PlantController::class, 'index'])->name('admin.home')->middleware('is_admin');
Route::get('admin/create', [PlantController::class, 'create'])->name('create')->middleware('is_admin');
Route::get('admin/edit', [PlantController::class, 'edit'])->name('edit')->middleware('is_admin');
Route::get('admin/managePlant', [PlantController::class, 'managePlant'])->name('admin.managePlant')->middleware('is_admin');
Route::get('admin/adminSearch', [PlantController::class, 'search'])->name('adminSearch')->middleware('is_admin');
<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

Route::get('/', [FrontController::class, 'landing'])->name('landing');
Route::get('home', [FrontController::class, 'home'])->name('home');
Route::get('about', [FrontController::class, 'about'])->name('about');
Route::get('showcase', [FrontController::class, 'showcase'])->name('showcase');
Route::get('showcase-details/{id}', [FrontController::class, 'showcaseDetails'])->name('showcase.details');
Route::get('packages', [FrontController::class, 'packages'])->name('packages');
Route::get('contact-us', [FrontController::class, 'contactUs'])->name('contact-us');

Route::resource('contact', ContactController::class)->except(['edit', 'update', 'index', 'create', 'destroy', 'show']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
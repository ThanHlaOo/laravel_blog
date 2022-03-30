<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BlogController;

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
})->name('welcome');

Route::get('/index',[BlogController::class, 'index'])->name('index');
Route::get('/detail/{id}',[BlogController::class, 'detail'])->name('detail');
Route::view('/about', 'public_view.about')->name('about');
Route::get('/blogs_by_category/{id}', [BlogController::class, 'baseOnCategory'])->name('baseOnCategory');
Auth::routes();

Route::prefix('dashboard')->middleware('auth')->group(function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('articles', ArticleController::class);
    Route::resource('categories', CategoryController::class);

    Route::prefix('profile')->group(function(){
        // Main Frame Route
        Route::get('/',[ProfileController::class, 'profile'])->name('profile');
        Route::get('/edit-photo',[ProfileController::class, 'editPhoto'])->name('profile.edit.photo');
        Route::get('/edit-password',[ProfileController::class, 'editPassword'])->name('profile.edit.password');
        Route::get('/edit-name-and-email',[ProfileController::class, 'editNameEmail'])->name('profile.edit.name.email');
        Route::post('/change-password',[ProfileController::class, 'changePassword'])->name('profile.changePassword');
        Route::post('/change-name',[ProfileController::class, 'changeName'])->name('profile.changeName');
        Route::post('/change-email',[ProfileController::class, 'changeEmail'])->name('profile.changeEmail');
        Route::post('/change-photo',[ProfileController::class, 'changePhoto'])->name('profile.changePhoto');
    });

});

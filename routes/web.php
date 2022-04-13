<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserManagerController;
use App\Http\Controllers\FbController;
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

Route::get('/blogs',[BlogController::class, 'index'])->name('index');
Route::get('/detail/{slug}',[BlogController::class, 'detail'])->name('detail');
Route::view('/about', 'public_view.about')->name('about');
Route::get('/blogs_by_category/{id}', [BlogController::class, 'baseOnCategory'])->name('baseOnCategory');
Auth::routes();

Route::prefix('dashboard')->middleware(['auth', 'is_suspended'])->group(function(){
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
        Route::post('/update-info', [ProfileController::class, 'updateInfo'])->name('profile.update.info');
        Route::get('/user-manager/users', [UserManagerController::class, 'index'])->name('user-manager.index');
        Route::get('/user-manager/suspended/{id}', [UserManagerController::class, 'suspended'])->name('user-manager.suspended');
        Route::get('/user-manager/unsuspended/{id}', [UserManagerController::class, 'unsuspended'])->name('user-manager.unsuspended');
        Route::post('/user-manager/delete/{id}', [UserManagerController::class, 'delete'])->name('user-manager.delete');
        Route::get('/user-manager/change-role/{id}', [UserManagerController::class, 'changeRole'])->name('user-manager.change-role');
        Route::post('/user-manager/change-password', [UserManagerController::class, 'changePassword'])->name('user-manager.change-password');


    });


});
Route::get('auth/facebook', [FbController::class, 'redirectToFacebook'])->name("facebookRedirect");

Route::get('auth/facebook/callback', [FbController::class, 'facebookSignin'])->name("callback");
<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(["auth","banUser"])->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::middleware('onlyAdmin')->group(function(){
        Route::get('/user-manager','UserManagerController@index')->name('userManager.index');
        Route::post('/make-admin','UserManagerController@makeAdmin')->name('userManager.makeAdmin');
        Route::post('/ban-user','UserManagerController@banUser')->name('userManager.banUser');
        Route::post('/restore-user','UserManagerController@restoreUser')->name('userManager.restoreUser');
    });
    Route::prefix('profile')->group(function(){
        Route::get('/profiles','ProfileController@profile')->name('profile');
        Route::get('/edit-profile-photo','ProfileController@editPhoto')->name('profile.edit.photo');
        Route::post('/change-photo','ProfileController@changePhoto')->name('profile.changePhoto');
        Route::get('/edit-password','ProfileController@editPassword')->name('profile.edit.password');
        Route::post('/change-password','ProfileController@changePassword')->name('profile.changePassword');
        Route::get('/edit-info','ProfileController@editInfo')->name('profile.edit.info');
        Route::post('/change-info','ProfileController@changeInfo')->name('profile.changeInfo');
        Route::post("/update-user-info","ProfileController@updateInfo")->name("profile.update.info");

    });
});


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function (){
    return view('welcome');
});

//For Admin
Route::get('/addCategory', [App\Http\Controllers\CategoryController::class,'index'])->name('add.Category');

Route::get('/addPlace',[App\Http\Controllers\ManagePlaceController::class,'index'])->name('add.Place'); 

Route::post('/addCategory/store',[App\Http\Controllers\CategoryController::class,'add'])->name('addCategory');

Route::post('/addPlace/store',[App\Http\Controllers\ManagePlaceController::class,'add'])->name('addPlace');

Route::get('/showCategory',[App\Http\Controllers\CategoryController::class,'view'])->name('showCategory');

Route::get('/showPlace',[App\Http\Controllers\ManagePlaceController::class,'view'])->name('showPlace');

Route::get('/showUser',[App\Http\Controllers\UserController::class,'view'])->name('showUser');

Route::get('/viewPlace',[App\Http\Controllers\PlaceController::class,'viewPlace'])->
name('viewPlace');

Route::get('/deletePlace/{id}',[App\Http\Controllers\ManagePlaceController::class,'delete'])->name('deletePlace');

Route::get('/editPlace/{id}',[App\Http\Controllers\ManagePlaceController::class,'edit'])->
name('editPlace');

Route::post('/updatePlace', [App\Http\Controllers\ManagePlaceController::class, 'update'])->
name('updatePlace');

//For User
Route::get('/placeDetail/{id}',[App\Http\Controllers\PlaceController::class,'placedetail'])->
name('place.detail');

Route::post('/Viewplace',[App\Http\Controllers\PlaceController::class, 'searchPlace'] ) ->name('search.place');

Route::get('/attraction',[App\Http\Controllers\PlaceController::class, 'viewAttraction'] ) ->name('attraction.places');

Route::get('/homeStay',[App\Http\Controllers\PlaceController::class, 'viewHomeStay'] ) ->name('homeStay.places');

Route::get('/Indoor',[App\Http\Controllers\PlaceController::class, 'viewIndoor'] ) ->name('indoor.places');

Route::get('/Outdoor',[App\Http\Controllers\PlaceController::class, 'viewOutdoor'] ) ->name('outdoor.places');

//Blog
Route::resource('/blog', PostsController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin
Route::group(['prefix'=>'admin'], function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
    Route::get('help',[AdminController::class,'help'])->name('admin.help');

    Route::post('profile',[AdminController::class,'updateAvatar'])->name('adminUpdateAvatar');
    Route::post('update-profile-info',[AdminController::class,'updateInfo'])->name('adminUpdateInfo');
    Route::post('change-profile-picture',[AdminController::class,'updatePicture'])->name('adminPictureUpdate');
    Route::post('change-password',[AdminController::class,'changePassword'])->name('adminChangePassword');
});

Route::auth();

//User
Route::group(['prefix'=>'user'], function(){
Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
Route::get('profile',[UserController::class,'profile'])->name('user.profile');
Route::get('help',[UserController::class,'help'])->name('user.help');

Route::post('profile',[UserController::class,'updateAvatar'])->name('userUpdateAvatar');
Route::post('update-profile-info',[UserController::class,'updateInfo'])->name('userUpdateInfo');
Route::post('change-profile-picture',[UserController::class,'updatePicture'])->name('userPictureUpdate');
Route::post('change-password',[UserController::class,'changePassword'])->name('userChangePassword');
});
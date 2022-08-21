<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommentController;
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

Route::post('/like-post/{show}', [App\Http\Controllers\PostsController::class, 'likePost'])->name('post.like')->middleware(['auth']);

Route::post('store', [App\Http\Controllers\CommentController::class, 'store'])->name("comments.store");



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

//Group Chat
Route::post('message', 'App\Http\Controllers\HomeController@sendMessage');  // 
Route::get('/message/{id}', 'App\Http\Controllers\HomeController@getMessage')->name('message'); 
Route::get('/ShowMassage/{id}', 'App\Http\Controllers\HomeController@ShowMassage'); 
Route::get('/messag/{id}', 'App\Http\Controllers\HomeController@getMessag')->name('message'); 
Route::get('/subscribe', 'App\Http\Controllers\HomeController@subscribe');
Route::delete('/unFollow/{id}', 'App\Http\Controllers\HomeController@remove_user'); 
/////////////////////  
Route::get('/group/create', 'App\Http\Controllers\GroupController@create_form');
Route::post('/group/create', 'App\Http\Controllers\GroupController@create');
Route::get('/group/join', 'App\Http\Controllers\GroupController@join_form');
Route::post('/group/join', 'App\Http\Controllers\GroupController@join');

Route::get('/group/edit/{id}', 'App\Http\Controllers\GroupController@edit');

Route::post('/group/update/{id}', 'App\Http\Controllers\GroupController@update');

Route::delete('/group/delete/{id}', 'App\Http\Controllers\GroupController@deleteGroup');

Route::get('/group/members_list/{id}', 'App\Http\Controllers\GroupController@members_list');

Route::get('/remove_user/{id}/{user_id}', 'App\Http\Controllers\GroupController@remove_user');
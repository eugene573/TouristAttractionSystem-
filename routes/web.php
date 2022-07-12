<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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

Route::get('/addCategory', [App\Http\Controllers\CategoryController::class,'index'])->name('add.Category');

Route::get('/addPlace',[App\Http\Controllers\ManagePlaceController::class,'index'])->name('add.Place'); 

Route::post('/addCategory/store',[App\Http\Controllers\CategoryController::class,'add'])->name('addCategory');

Route::post('/addPlace/store',[App\Http\Controllers\ManagePlaceController::class,'add'])->name('addPlace');

Route::get('/showCategory',[App\Http\Controllers\CategoryController::class,'view'])->name('showCategory');

Route::get('/showPlace',[App\Http\Controllers\ManagePlaceController::class,'view'])->name('showPlace');

Route::get('/viewPlace',[App\Http\Controllers\PlaceController::class,'viewPlace'])->
name('viewPlace');

Route::get('/deletePlace/{id}',[App\Http\Controllers\ManagePlaceController::class,'delete'])->name('deletePlace');

Route::get('/editPlace/{id}',[App\Http\Controllers\ManagePlaceController::class,'edit'])->
name('editPlace');

Route::post('/updatePlace', [App\Http\Controllers\ManagePlaceController::class, 'update'])->
name('updatePlace');

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
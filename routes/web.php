<?php

use App\Http\Controllers\SiteController;
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

//Route::get('/', function () {
//    return view('welcome'); CAMPAIGN
//});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/',[SiteController::class,'index'])->name('site.home');


Route::get('/news',[SiteController::class,'news'])->name('site.news');
Route::get('/joinUs',[SiteController::class,'join'])->name('site.join');
Route::get('/campaign',[SiteController::class,'campaign'])->name('site.campaign');

Route::post('/joinUs/apply',[SiteController::class,'apply'])->name('site.apply');

Route::post('/contact/message',[SiteController::class,'message'])->name('site.message');
Route::get('/contact',[SiteController::class,'contact'])->name('site.contact');


Route::get('/news/{article}',[SiteController::class,'singleNews'])->name('site.singleNews');

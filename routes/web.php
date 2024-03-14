<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//tweets
Route::get('/tweets',[App\Http\Controllers\TweetContoller::class , 'index']);
Route::put('/updatetweet/{id}',[App\Http\Controllers\TweetContoller::class , 'update']);
Route::post('/ajoutertweet',[App\Http\Controllers\TweetContoller::class , 'store']);
Route::delete('/deletetweet/{id}',[App\Http\Controllers\TweetContoller::class , 'destroy']);

//organizers
Route::get('/organizers',[App\Http\Controllers\OrganizerContoller::class , 'index']);
Route::put('/updatetorganizer/{id}',[App\Http\Controllers\OrganizerContoller::class , 'update']);
Route::post('/ajouterorganizer',[App\Http\Controllers\OrganizerContoller::class , 'store']);
Route::delete('/deleteorganizer/{id}',[App\Http\Controllers\OrganizerContoller::class , 'destroy']);

//spnsors
Route::get('/sponsors',[App\Http\Controllers\SponsorContoller::class , 'index']);
Route::put('/updatetsponsors/{id}',[App\Http\Controllers\SponsorContoller::class , 'update']);
Route::post('/ajoutersponsors',[App\Http\Controllers\SponsorContoller::class , 'store']);
Route::delete('/deletesponsors/{id}',[App\Http\Controllers\SponsorContoller::class , 'destroy']);

//keynote
Route::get('/keyNote',[App\Http\Controllers\KeynoteContoller::class , 'index']);
Route::put('/updatetkeyNote/{id}',[App\Http\Controllers\KeynoteContoller::class , 'update']);
Route::post('/ajouterkeyNote',[App\Http\Controllers\KeynoteContoller::class , 'store']);
Route::delete('/deletekeyNote/{id}',[App\Http\Controllers\KeynoteContoller::class , 'destroy']);

//specialsession
Route::get('/session',[App\Http\Controllers\SpecialSessionContoller::class , 'index']);
Route::put('/updatetsession/{id}',[App\Http\Controllers\SpecialSessionContoller::class , 'update']);
Route::post('/ajoutersession',[App\Http\Controllers\SpecialSessionContoller::class , 'store']);
Route::delete('/deletesession/{id}',[App\Http\Controllers\SpecialSessionContoller::class , 'destroy']);

//author
Route::get('/authors',[App\Http\Controllers\AuthorContoller::class , 'index']);
Route::put('/updatetauthors/{id}',[App\Http\Controllers\AuthorContoller::class , 'update']);
Route::post('/ajouterauthors',[App\Http\Controllers\AuthorContoller::class , 'store']);
Route::delete('/deleteauthors/{id}',[App\Http\Controllers\AuthorContoller::class , 'destroy']);
 
//countie
Route::get('/countries',[App\Http\Controllers\CountrieContoller::class , 'index']);
Route::put('/updatetcountries/{id}',[App\Http\Controllers\CountrieContoller::class , 'update']);
Route::post('/ajoutercountries',[App\Http\Controllers\CountrieContoller::class , 'store']);
Route::delete('/deletecountries/{id}',[App\Http\Controllers\CountrieContoller::class , 'destroy']);

//photo
Route::get('/photos',[App\Http\Controllers\PhotoContoller::class , 'index']);
Route::put('/updatetphotos/{id}',[App\Http\Controllers\PhotoContoller::class , 'update']);
Route::post('/ajouterphotos',[App\Http\Controllers\PhotoContoller::class , 'store']);
Route::delete('/deletephotos/{id}',[App\Http\Controllers\PhotoContoller::class , 'destroy']);

//video
Route::get('/videos',[App\Http\Controllers\VideoContoller::class , 'index']);
Route::put('/updatetvideos/{id}',[App\Http\Controllers\VideoContoller::class , 'update']);
Route::post('/ajoutervideos',[App\Http\Controllers\VideoContoller::class , 'store']);
Route::delete('/deletevideos/{id}',[App\Http\Controllers\VideoContoller::class , 'destroy']);
//users
Route::get('/users',[App\Http\Controllers\UserAdminController::class , 'index']);
Route::put('/updatetusers/{id}',[App\Http\Controllers\UserAdminController::class , 'update']);
Route::delete('/deleteusers/{id}',[App\Http\Controllers\UserAdminController::class , 'destroy']);

Route::get('/', function () {
    return view('auth/login');
});



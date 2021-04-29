<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\show_movie;
use App\Http\Controllers\movie;
use App\Http\Controllers\show;
use App\Http\Controllers\vnpay;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\login;
use App\Http\Controllers\AdminShow;
use App\Http\Controllers\admin;
use App\Http\Controllers\room;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('movie')->group(function () {
    Route::get('all',[show_movie::class,"show_movie_all"]);
    Route::get('nowshowing',[show_movie::class,"show_movie_nowshowing"]);
    Route::get('commingsoon',[show_movie::class,"show_movie_commingsoon"]);
    Route::get('id/{id}', [show_movie::class,"show_movie_where_id"]);
    Route::get('show/date', [show::class,"show_date"]);
});
Route::get('cinema',[show::class,"show_cinema"]);
Route::get('row/{id_show}',[show::class,"show_row"]);
Route::get('seat/{id_show}',[show::class,"show_seat"]);
Route::get('show/{id_film}/{id_cinema}/{id_date}', [show::class,"show_film_cinema"]);



// Route::get('pay/{id_film}',[vnpay::class,"create"]);
Route::post('pay',[vnpay::class,"create"]);
Route::post('pay_return',[vnpay::class,"return"]);


//user

Route::get('auth/google/url', [login::class,"loginUrl"]);
Route::get('auth/google/callback', [login::class,"loginCallback"]);
//login
Route::post('login', [login::class,"login_sign_up"]);

//admin

Route::middleware(['checktoken'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::resource('movie', movie::class);
        Route::resource('show', AdminShow::class);
        Route::resource('room', room::class);
        Route::post('show_film_cinema', [admin::class,"show_where_film_cinema"]);
    });
});

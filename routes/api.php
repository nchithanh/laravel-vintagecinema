<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\show_movie;
use App\Http\Controllers\show;
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


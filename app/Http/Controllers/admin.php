<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class admin extends Controller
{
    public function show_where_film_cinema(Request $request)
    {
        // $data_show = DB::table('film_cinema')
        // ->where('id_film',$request['id_film'])
        // ->where('id_cinema',$request['id_cinema'])
        // ->join('showw','film_cinema.id_film_cinema','=','showw.id_film_cinema')
        // ->get();
        
        $data_show = DB::select('SELECT * FROM `film_cinema`,`showw`,`room`,`date` 
        WHERE film_cinema.id_film = '.$request['id_film'].' 
        AND film_cinema.id_cinema = '.$request['id_cinema'].' 
        AND film_cinema.id_film_cinema = showw.id_film_cinema 
        AND showw.id_room = room.id_room 
        AND showw.id_date = date.id_date');
        return $data_show;
    }
}

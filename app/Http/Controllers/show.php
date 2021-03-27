<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class show extends Controller
{
    function show_movie_show_where_id($id){
        $data_movie = DB::table('film_cinema')->where('id_film',$id)->get();
        $data_movie = json_decode($data_movie,true);
        for ($i=0; $i < count($data_movie); $i++) { 
            $show = DB::select('select DISTINCT date,id_show FROM showw WHERE id_film_cinema = '.$data_movie[$i]['id_film_cinema'].'');
        }
        return $show;
    }

    function show_date(){
        $data_date = json_decode(DB::table('date')->get(),true);
        return $data_date;
    }
    function show_cinema(){
        $data_cinema = DB::table('cinema')->get();
        return $data_cinema;
    }
    function show_film_cinema($id_film,$id_cinema,$id_date){
        $data_film_cinema = json_decode(DB::table('film_cinema')
        ->select('id_film_cinema')
        ->where('id_film',$id_film)
        ->where('id_cinema',$id_cinema)
        ->get(),true);
        $date_show = DB::table('showw')->where('id_film_cinema',$data_film_cinema[0]['id_film_cinema'])->where('id_date',$id_date)->get();
        return $date_show;
    }
     function show_row($id_show)
    {
        $id_room = json_decode(DB::table('showw')->select('id_room')->where('id_show',$id_show)->get(),true);
        $data_row = DB::table('row')->where('id_room',$id_room)->get();
        return $data_row;
    }
    function show_seat($id_show){
        $id_room = json_decode(DB::table('showw')->select('id_room')->where('id_show',$id_show)->get(),true);
        $data_seat = json_decode(DB::table('row')->where('id_room',$id_room)->join('seat','row.id_row','=','seat.id_row')->get(),true);
        $data_checked_seat = json_decode(DB::table('seat_checked')->where('id_show',$id_show)->get(),true);
        if(count($data_checked_seat)==null){
            for ($j=0; $j < count($data_seat); $j++) { 
                $data_seat[$j]['checked'] = 0;
            }
            return $data_seat;
        };
        for ($i=0; $i < count($data_seat); $i++) { 
            for ($j=0; $j < count($data_checked_seat); $j++) { 
                if($data_seat[$i]['id_seat'] == $data_checked_seat[$j]['id_seat']){
                    $data_seat[$i]['checked'] = 1;
                }else{
                    $data_seat[$i]['checked'] = 0;
                }
            }
        }
        return $data_seat;
    }
}

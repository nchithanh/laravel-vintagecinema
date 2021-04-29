<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class show_movie extends Controller
{
    function show_movie_all(){
        $data = DB::table('film')->get();
        return json_encode($data);
    }
    function show_movie_nowshowing(Request $request){
        $data = DB::table('film')->where("status",1)->get();
        return json_encode($data);
    }
    function show_movie_commingsoon(){
        $data = DB::table('film')->where("status",0)->get();
        return json_encode($data);
    }
    function show_movie_where_id($id){
        $data = DB::table('film')->where("id_film",$id)->get();
        return json_encode($data);
    }
}

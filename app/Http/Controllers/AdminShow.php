<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminShow extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_film_cinema = DB::table('film_cinema')->where('id_film',$request['id_film'])->where('id_cinema',$request['id_cinema'])->get();
        $id_film_cinema = json_decode($id_film_cinema,true);
        DB::insert('insert into showw (time, id_film_cinema, id_room, id_date) 
        values (?, ?, ?, ?)', 
        [''.$request['time'].'', $id_film_cinema[0]['id_film_cinema'], $request['id_room'], $request['id_date']]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_flim)
    {
        $data_film_cinema = DB::table('film_cinema')->select->where('id_film',$id_flim)->get();
        $data_show = DB::table('showw')->where('id_film_cinema',$id)->join('room','showw.id_room','=','room.id_room')->get();
        return $data_show;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_show = DB::select('SELECT * FROM `showw`,`room`,`date` 
        WHERE showw.id_room = room.id_room 
        AND showw.id_date = date.id_date 
        AND id_show = '.$id.'');
        return $data_show;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::update('update showw set time = "'.$request['time'].'",
        id_room = '.$request['id_room'].',
        id_date = '.$request['id_date'].' where id_show = ?', [$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('showw')->where('id_show',$id)->delete();
    }
}

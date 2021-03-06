<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class movie extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        return 'index';
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
        DB::insert('insert into film (name, point, 
        description,duration,country,category,
        date_start,status,img) 
        values (?,?,?,?,?,?,?,?,?)', 
        [$request['name'],$request['point'],$request['description'],
        $request['duration'],$request['country'],$request['category'],
        $request['date_start'],$request['status'],$request['img']
        ]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        DB::update('update film set name = "'.$request['name'].'", point = '.$request['point'].', 
        description = "'.$request['description'].'",duration = "'.$request['duration'].'",
        country = "'.$request['country'].'",category = "'.$request['category'].'",
        date_start = "'.$request['date_start'].'",status = '.$request['status'].',
        img = "'.$request['img'].'" where id_film = ?', [$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('film')->where('id_film',$id)->delete();
    }
}

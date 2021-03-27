<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class AddFilmCinema extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_film = DB::table('film')->get();
        $data_cinema = DB::table('cinema')->get();
        $data_film = json_decode($data_film,true);
        $data_cinema = json_decode($data_cinema,true);
       
        for ($i=0; $i < count($data_film); $i++) { 
            for ($j=0; $j < count($data_cinema); $j++) { 
                DB::table('film_cinema')->insert([
                    "id_film" => $data_film[$i]['id_film'],
                    "id_cinema" => $data_cinema[$j]['id_cinema'],
                ]);
            }
        }
    }
}

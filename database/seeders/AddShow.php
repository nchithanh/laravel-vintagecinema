<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class AddShow extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('showw')->delete();
        $date = json_decode(DB::table('date')->get(),true);
        $time = [6,12,18,20,23];
        $index_time = 0;
        $data_film_cinema = json_decode(DB::table('film_cinema')->get(),true);
        for ($x=0; $x < count($date); $x++) { 
            for ($i=0; $i < count($data_film_cinema); $i++) { 
                $data_room = json_decode(DB::table('room')->where('id_cinema',$data_film_cinema[$i]['id_cinema'])->get(),true);
                for ($j=0; $j < count($data_room); $j++) { 
                    $index_time = rand(0,4);
                    DB::table('showw')->insert([
                        "time" => $time[$index_time].":00",
                        "id_date" => $date[$x]['id_date'],
                        "id_film_cinema" => $data_film_cinema[$i]['id_film_cinema'],
                        "id_room" => $data_room[$j]['id_room'],
                    ]);
                }
            }
        }
    }
}

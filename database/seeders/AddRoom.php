<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class AddRoom extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_cinema = DB::table('cinema')->get();
        $data_cinema = json_decode($data_cinema,true);
        for ($i=0; $i < count($data_cinema); $i++) { 
            for ($j=0; $j < 5; $j++) { 
                DB::table('room')->insert([
                    "name" => "phòng ".$j,
                    "id_cinema" => $data_cinema[$i]['id_cinema'],
                ]);
            }
        }
    }
}

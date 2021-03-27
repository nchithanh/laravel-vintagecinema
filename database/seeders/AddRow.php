<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class AddRow extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $row = ['A','B','D','F','G','H','L','M','N'];
        $data_room = json_decode(DB::table('room')->get(),true);
        for ($i=0; $i < count($data_room); $i++) { 
           for ($j=0; $j < count($row); $j++) { 
            DB::table('row')->insert([
                "name" => $row[$j],
                "id_room" => $data_room[$i]['id_room']
            ]);
           }
        }
    }
}

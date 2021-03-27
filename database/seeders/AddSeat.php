<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class AddSeat extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_seat = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
        $data_row = json_decode(DB::table('row')->get(),true);
        for ($i=0; $i < count($data_row); $i++) { 
            for ($j=0; $j < count($data_seat); $j++) { 
                DB::table('seat')->insert([
                    "name" => $data_seat[$j],
                    "id_row" => $data_row[$i]['id_row']
                ]);
            }
        }
    }
}

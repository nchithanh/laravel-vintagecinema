<?php

use DB;
$data_cinema = DB::table('cinema')->get();
        $data_film = DB::table('film')->get();
?>
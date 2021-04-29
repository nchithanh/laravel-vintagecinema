<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class login extends Controller
{
    public function login_sign_up(Request $request){
        $user = DB::table('user')->where('token',$request['token'])->get();
        if(count($user)>0){
            return $user;
        }
        DB::insert('insert into user (token,role) values (?, ?)', [$request['token'], 1]);
        return 1;
    }

    public function loginUrl()
    {
        return Response::json([
            'url' => Socialite::driver('google')->stateless()->redirect()->getTargetUrl(),
        ]);
    }

    public function loginCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();
        $user = null;
        $user = DB::table('user')->where('id',$googleUser->id)->where('email',$googleUser->email)->get();
        $user = json_decode($user,true);
        if(count($user)>0){
            DB::update('update user set token = "'.$googleUser->token.'" where id = ?', [$googleUser->id]);
            return Response::json([
                'id_user'=>$user[0]['id_user'],
                'token' => $googleUser->token,
                'email' => $googleUser->email,
                'name' => $googleUser->name,
                'role' => $user[0]['role'],
            ]);
        }

        DB::insert('insert into user (id, name, email, token, role) values (?, ?, ?, ?, ?)', 
        [$googleUser->id, $googleUser->name,$googleUser->email,$googleUser->token,1]);

        return Response::json([
            'id_user'=>$user[0]['id_user'],
            'token' => $googleUser->token,
            'email' => $googleUser->email,
            'name' => $googleUser->name,
            'role' => 1,
        ]);

        
    }
}

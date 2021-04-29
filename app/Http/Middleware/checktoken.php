<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use DB;


class checktoken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->header()['token'][0]!='null'){
            $user = DB::table('user')->where('token',$request->header()['token'][0])->get();
            if(count($user)>0){
                if($user[0]->role == 2){
                    return $next($request);
                }
                return response()->json(['error'=>'not admin']);
            }
            return response()->json(['error'=>'not found user']);
            
        }
        return response()->json(['error'=>'Token is required']);
    }
}

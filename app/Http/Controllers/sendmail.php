<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class sendmail extends Controller
{
    public function send_mail(Request $request){
       $data = [
           'email'=>$request['email'],
           'code'=>$request['code'],
           'name'=>$request['name']
       ];
      
        Mail::send('mailqr',  ['data' => $data], function ($message) use ($data) {
           
            $message->from('nchithanh9999@gmail.com', 'John Doe');
            $message->to($data['email'], $data['name']);
            $message->subject('ma qr cua ban tai vintage cinema');
            
        });
      
       
    }
}

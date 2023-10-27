<?php

namespace App\Http\Controllers;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;

class Student_Info_Controller extends Controller
{
        function onInsert(Request $request){
            $access_token=$request->input('access_token');
            $key=env('TOKEN_KEY');
            $decoded = JWT::decode($token, $key, array('HS256'));

            //   $name =  $request->input('name');
            //   $roll =   $request->input('roll');
            //   $class =  $request->input('class');
            //   $city =  $request->input('city');
            //   $phone =  $request->input('phone');
            //   $email_address =   $request->input('email_address');

            return response()->json($decoded);
        }

        function onSelect(){

        }

        function onDelete(){

        }
}

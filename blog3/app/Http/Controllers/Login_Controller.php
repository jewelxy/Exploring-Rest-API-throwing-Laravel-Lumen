<?php

namespace App\Http\Controllers;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Http\Request;
use App\Models\Student_registration_model;

class Login_Controller extends Controller
{
    function onLogin(Request $request){
         $username = $request->input('username');
        $password = $request->input('password');
        $userCount = Student_registration_model::where(['username'=>$username,'password'=>$password])->count();

        return $userCount;
        // if($userCount == 1){
        //            $key = env('TOKEN_KEY');
        //            $payload = array(
        //             'site' => 'http://demo.com',
        //             'user' => $username,
        //             'iat' => time(),
        //             'nbf ' => time()+3600
        //            );
        // $jwt = JWT::encode($payload, $key, 'HS256');

        // // return array(response()->json(['Token' => $jwt,'Status' => 'Login Success']));
        // return response()->json(['Token' => $jwt,'Status' => 'Login Success']);

        // }else{
        //     return "Wrong username and password";
        // }

    }
}

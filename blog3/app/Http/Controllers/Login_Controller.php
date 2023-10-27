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
        $user = Student_registration_model::where(['username' => $username, 'password' => $password])->first();

        if ($user) {
            // the user id and username column is named 'id' and 'username' in your database table
            $user_id = $user->id; 
            $user_name = $user->username;
            $key = env('TOKEN_KEY');

            $payload = array(
                'website' => 'http://demo.com',
                'user' => $username,
                'user_id' => $user_id, // Include user user_id and user_name in the payload
                'user_name' => $user_name, 
                'iat' => time(),
                "exp" => time()+3600
            );
            $jwt = JWT::encode($payload, $key, 'HS256');

            $response = [
                'access_token' => $jwt,
                'Status' => 'Login Success',
            ];

            $userInfo = [
                'user_id' => $user_id,
                'user_name' => $user_name,
            ];

            return array(response()->json(['response' => $response, 'userInfo' => $userInfo]));
        } else {
            return "Wrong username and password";
        }
    }
}

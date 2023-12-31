<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function loginUser(Request $request)
    {
        $input = $request->all();
        Auth::attempt($input);
        $user = Auth::user();
        $token = $user->createToken('example')->accessToken;
        // dd($token);
        return Response(['status'=>200,'token'=>$token],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function getUserDetail(Request $request)
    {
       if(Auth::guard('api')->check()){
            $user = Auth::guard('api')->user();
            return Response(['data' => $user],200);
       }else{
        return Response(['data' => 'Unauthorized'],401);
       }
       
        
    }

    /**
     * Display the specified resource.
     */
    public function userLogout(User $user)
    {
       if(Auth::guard('api')->check()){
            $accessToken = Auth::guard('api')->user()->token();
            \DB::table('oauth_refresh_tokens')
            ->where('access_token_id', $accessToken->id)
            ->update(['revoked' => true]);
            $accessToken->revoke();

            return Response(['data' => 'Unauthorized', 'message' => 'User Logout successfully'],200);
       }else{
            return Response(['data' => 'Unauthorized'],401);
       }
    }
}

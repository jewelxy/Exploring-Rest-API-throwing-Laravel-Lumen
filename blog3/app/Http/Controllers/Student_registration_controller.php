<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student_registration_model;

class Student_registration_controller extends Controller
{
    public function onRegister(Request $request){
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $username = $request->input('username');
        $password = $request->input('password');
        $gender = $request->input('gender');
        $city = $request->input('city');

        $userCount = Student_registration_model::where('username',$username)->count();

        if($userCount!=0){
            return 'User already exist';
        }else{
           $result =  Student_registration_model::insert([
                'firstName' => $firstName,
                'lastName' => $lastName,
                'username' => $username,
                'password' => $password,
                'gender' => $gender,
                'city' => $city 
            ]);


            if($result == true){
                return 'Registration successful';
            }else{
                return 'Registration failed';
            }
        }

    }
}

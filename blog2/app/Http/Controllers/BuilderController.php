<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

//Connecting DB Class
use Illuminate\support\Facades\DB;


class BuilderController extends Controller{

    //Select all data from table
    public function Allrows(){
       $result =  DB::table('student_details')->get();
       return $result;
    } 

    //Retrive specificdata from table

    public function RetriveSpecificData($value){

        //Specific all data list by slug from array
        $result = DB::table('student_details')->where('id',$value)->get();
        return $result;

        //Specific property value
        /*
        $result = DB::table('student_details')->where('id', $value)->first(); 
        return $result->name;
        */
        
    }
}
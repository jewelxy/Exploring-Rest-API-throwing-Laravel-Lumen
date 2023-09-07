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


    //Aggregrate query builder
    public function AgregrateMethod(){

        //Count how many rows in table
        // $result = DB::table('student_details')->count();
        // return $result;

        //Count max and min data in table in column
        // $result = DB::table('student_details')->min('roll');
        // return $result;
        
        //Sum anverage data in table column
        $result = DB::table('student_details')->sum('roll');
        return $result;
    }

}
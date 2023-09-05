<?php

namespace App\Http\Controllers; 
use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;


class DetailsController extends Controller{

    public function DetailsSelect(Request $request){
        $sql = "SELECT * FROM student_details";
        $request  = DB::select($sql);
        return $request;
         
    }



    public function DetailsDelete(){
         
    }



    public function DetailsUpdate(){
         
    }


    public function DetailsCreate(Request $request){

        $name = $request->input("name");
        $roll = $request->input("roll");  
        $class = $request->input("class");
       $city =  $request->input("city");
       $phone =  $request->input("phone");
         
    }

}
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



    public function DetailsDelete(Request $request, $id) {
        $existingRecord = DB::table('student_details')->where('id', $id)->first();
    
        if (!$existingRecord) {
            return 'Record not found';
        }
        
        $result = DB::table('student_details')->where('id', $id)->delete();
    
        if ($result) {
            return 'Data deleted successfully';
        } else {
            return 'Data deletion failed';
        }
    }
    



    public function DetailsUpdate(Request $request){
        $name = $request->input("name");
        $id = $request->input("id");
        $city =  $request->input("city");

        $sql = "UPDATE `student_details` SET `name`=?,`city`=? WHERE `id` = ?";
        $result = DB::update($sql,[$name,$city,$id]);

        if($result == true){
            return 'Data updated sucessfully';
        }else{
            return 'Data updated failed';
        }
         
    }


    public function DetailsCreate(Request $request){

        $name = $request->input("name");
        $roll = $request->input("roll");  
        $class = $request->input("class");
        $city =  $request->input("city");
        $phone =  $request->input("phone");

        //SQL query for update

        $sql = "INSERT INTO `student_details`(`name`, `roll`, `class`, `city`, `phone`) VALUES (?,?,?,?,?)";
        $result = DB::insert($sql,[$name,$roll,$class,$city,$phone]);

        //Message body for create data
        if( $result == true){
            return 'Data inserted successfully';
        }else{
            return 'Data insert failed ! Try again';
        }
         
    }

}  
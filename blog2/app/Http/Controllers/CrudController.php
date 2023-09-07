<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

//Connecting DB Class
use Illuminate\support\Facades\DB;

class CrudController extends Controller{
    //Fetch data
    public function fetchData(){
            $result = DB::table('student_details')->get();
            return $result;
    }

    //Insert Data
    public function InsertData(Request $request){
        $name = $request->input("name");
        $roll = $request->input("roll");
        $class = $request->input("class");
        $phone = $request->input("phone");
        $city = $request->input("city");

       $result = DB::table('student_details')->insert([
            ['name' => $name, 'roll' => $roll, 'class' => $class, 'phone' => $phone, 'city' => $city]
        ]);

        if($result == true){
            return 'Data inserted successfully';
        }
        else{
            return 'Data insert failed';
        }

    }

    //Update Data
    public function UpdateData(Request $request){
        $id = $request->input('id');
        $name = $request->input('name');
        $roll = $request->input("roll");
        $class = $request->input("class");
        $phone = $request->input("phone");
        $city = $request->input("city");

        $result = DB::table('student_details')->where('id',$id)->update(['name' => $name,'roll' => $roll, 'class' => $class, 'phone' => $phone, 'city' => $city]);

        if($result == true){
            return 'Data updated successfully';
        }else{
            return 'Data updated failed ! Try again';
        }

    }

    //Delete Data
    public function DeleteData(Request $request, $id){
            $result = DB::table('student_details')->where('id', $id)->delete();
            if($result == true){
                return 'Deleted record successfully';
            }else{
                return 'Delete record failed ! Try again';
            }
    }
}
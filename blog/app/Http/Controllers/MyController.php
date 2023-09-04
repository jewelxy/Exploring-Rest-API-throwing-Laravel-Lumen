<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class MyController extends Controller{

    public function My(){
        return "Controller function is working";
    }

    //Controller function with parameter

    public function MyParam($myParam){
        return "Controller with Parameter ".$myParam;
    }


    //Controller funtion response in body
    public function MyResponse($myRes){
        return response($myRes);
    }


    //Controller function response in header

    public function MyResponseHeader($headRes){
        return response($headRes)
                ->header('name',$headRes)
                ->header('age','28')
                ->header('city', 'Bogura');
    }


    //JSON data throwing simple array

    public function MyJSONSimple(){
            $simpleArray = array('Computer','Ram','Rom');
            return response()->json($simpleArray);
    }


    //JSON data throwing associative array

    public function MyJSONAssociative(){
        $assArray = array(
            'name' => 'Toha',
            'Age' => '2',
            'Father' => 'Jewel Rana'
        );

        return response()->json($assArray);
    }



    //Method Redirect

    public function MyFirstMethod(){
        return redirect('/second');
    }

    public function MySecondMethod(){
        return 'I am learning API method redirecting';
    }


    //Response download
    public function DownloadFile(){
        $path = 'demo.txt';
        return response()->download($path);
    }

    //Request method body
    /*
    public function MyCatch(Request $request){
       return  $request;
    }
    */

      //Request method header
      /*
      public function MyCatch(Request $request){
        return  $request->header();
     }
     */


     //Request method header for specific value
     public function MyCatch(Request $request){
        return  $request->header('name'); 
     }
}  
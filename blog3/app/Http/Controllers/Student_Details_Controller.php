<?php

namespace App\Http\Controllers;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Http\Request;
use App\Models\Student_Details_Model;

class Student_Details_Controller extends Controller
{

        //Select all data from table
        public function selectAll(){
                $result = Student_Details_Model::all(); 
                return $result;

        }
        //Select specific data by from value
        public function selectByID(Request $request){
               $id =  $request->input('id');
               $result = Student_Details_Model::where('id',$id)->get();
               return $result;
                 
        }

        //Select specific data by slug url
        public function selectByIDBySlug(Request $request,$id){
                       $result = Student_Details_Model::where('id',$id)->get();
                       return $result;
                         
                }

        //Insert data in table
        public function insertData(Request $request){
                $token = $request->input('access_token');
                $key = env('TOKEN_KEY');
                // $decode = JWT::decode($token,$key,array('HS256'));
                $decode = JWT::decode($token, new Key($key, 'HS256'));


                $name = $request->input('name');
                $roll = $request->input('roll');
                $class = $request->input('class');
                $city = $request->input('city');
                $phone = $request->input('phone');
                $email_address = $request->input('email_address');

                $result = Student_Details_Model::insert(['name'=>$name,'roll'=>$roll,'class'=>$class,'city'=>$city,'phone'=>$phone,'email_address'=>$email_address]);

                if($result == true){
                        return 'Data inserted successfully'.' '.response()->json($decode) ;
                }else{
                        return 'Data insert failed ! Try again';
                }

        }


        //Deleta data from table
        public function deleteData(Request $request){
                $id = $request->input('id');
                $result = Student_Details_Model::where('id',$id)->delete();

                if($result == true){
                        return 'Delete Successfully';
                }else{
                        return 'Delete failed';
                }
        }

        //Delete using slug
        public function deleteBySlug(Request $request,$id){
                $result = Student_Details_Model::where('id',$id)->delete();

                if($result == true){
                        return 'Delete Successfully';
                }else{
                        return 'Delete failed';
                }
        }

        //update data
        public function updateData(Request $request){
                $id = $request->input('id');
                $name = $request->input('name');
                $roll = $request->input("roll");
                $class = $request->input("class");
                $phone = $request->input("phone");
                $city = $request->input("city");

                $result = Student_Details_Model::where('id',$id)->update(['name' => $name,'roll' => $roll, 'class' => $class, 'phone' => $phone, 'city' => $city]);
                if($result == true){
                        return 'Data updated successfully';
                    }else{
                        return 'Data updated failed ! Try again';
                    }
        }

        //update data using slug
        public function updateDataBySlug(Request $request,$id){
                $name = $request->input('name');
                $roll = $request->input("roll");
                $class = $request->input("class");
                $phone = $request->input("phone");
                $city = $request->input("city");

                $result = Student_Details_Model::where('id',$id)->update(['name' => $name,'roll' => $roll, 'class' => $class, 'phone' => $phone, 'city' => $city]);
                if($result == true){
                        return 'Data updated successfully';
                    }else{
                        return 'Data updated failed ! Try again';
                    }
        }
}

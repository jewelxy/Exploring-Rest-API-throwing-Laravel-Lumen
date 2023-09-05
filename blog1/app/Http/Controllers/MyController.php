<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB; 

class MyController extends Controller { 

        public function dbConnection(){
            $dbName = DB::Connection()->select("SELECT * FROM student_details");
            return $dbName;
        }
} 
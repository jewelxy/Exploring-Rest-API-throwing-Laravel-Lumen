<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student_Details_Model extends Model
{
    protected $table = 'student_details';
    protected $primaryKey  = 'id';
    public $incrementing  = true;
    public $keyType  = 'int';
    public $timestamps = false;
 
}
 
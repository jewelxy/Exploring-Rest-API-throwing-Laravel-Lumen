<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student_registration_model extends Model
{
    protected $table = 'student_registration';
    protected $primaryKey  = 'id';
    public $incrementing  = true;
    public $keyType  = 'int';
    public $timestamps = false; 
}

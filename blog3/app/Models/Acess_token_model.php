<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Acess_token_model extends Model
{
    protected $table = 'acess_token';
    protected $primaryKey  = 'id';
    public $incrementing  = true;
    public $keyType  = 'int';
    public $timestamps = false; 
}

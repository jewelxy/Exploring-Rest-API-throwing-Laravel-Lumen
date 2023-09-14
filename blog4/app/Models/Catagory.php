<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagory extends Model{
        use HasFactory;
        protected $fillable = [
            'name', 'slug', 'is_active',
        ];

// Every catagory has many subcatagories
 
        public function subCatagories(){
            return $this->hasMany(SubCatagory::class);
        }
}
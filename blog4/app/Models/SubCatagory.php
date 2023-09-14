<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCatagory extends Model{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'is_active', 'catagory_id',
    ];

    //every subcatagory belongs to a catagory

    public function catagory(){
            return $this->belongsTo(Catagory::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\City;
class Hotel extends Model
{
    use HasFactory;
    protected $fillable = [
        "name","city_id"
    ];
    protected $casts = [
        "name"=> "string",
        "city_id"=> "integer",
        
    ];

    public function hotels(){

     return $this->belongsTo(City::class);
   
       }
}

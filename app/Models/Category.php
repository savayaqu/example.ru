<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Category extends Model
{
    use HasFactory;
    //Связь 1 к многим (from FK to PK)
    public function products(){
        return $this->hasMany(Product::class);
    }




}

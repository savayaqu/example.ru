<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Product extends Model
{
    use HasFactory;
    //Обратная связь 1 к многим (from PK to FK)
    public function category(){
        return $this->belongsTo(Category::class);
    }
    protected $fillable = ['name', 'price', 'quantity', 'description', 'category_id'];

}

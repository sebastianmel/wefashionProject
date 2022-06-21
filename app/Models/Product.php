<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function state(){
       return $this->belongsTo(State::class);
    }

    public function state2(){
       return $this->belongsTo(State2::class);
    }

    public function category(){
       return $this->belongsTo(Category::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ["nom","description","state_id","category_id","price","picture","state2_id","alphanum"];

    public function state(){
       return $this->belongsTo(State::class);
    }

    public function state2(){
       return $this->belongsTo(State2::class);
    }

    public function category(){
       return $this->belongsTo(Category::class);
    }
    public function price(){
       return $this->belongsTo(Price::class);
    }
    public function picture(){
       return $this->hasOne(Picture::class);
    }

}

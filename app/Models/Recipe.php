<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    public function language() {
        return $this->belongsTo(Language::class);
    }

    public function cart(){
        return $this->hasMany(Cart::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorization extends Model
{
    use HasFactory;

    //a singer belongTo a Categorization
    //a categorization hasMany Singers

    public function singers(){
        return $this->hasMany(Singer::class);
    }

    //a categorization hasMany Songs

    public function songs(){
        return $this->hasMany(Song::class);
    }
}

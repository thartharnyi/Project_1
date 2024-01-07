<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
    use HasFactory;

    //a singer hasMany songs
    //a song belongsTo a singer

    public function songs(){
        return $this->hasMany(Song::class);
    }

    //a singer belongTo a Categorization
    //a categorization hasMany Singers

    public function categorization(){
        return $this->belongsTo(Categorization::class);
    }
}

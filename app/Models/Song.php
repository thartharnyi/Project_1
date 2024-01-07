<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    //a song belongsTo a singer

    public function singer(){
        return $this->belongsTo(Singer::class);
    }

    //a song belongsTo a categorization
    
    public function categorization(){
        return $this->belongsTo(Categorization::class);
    }
}

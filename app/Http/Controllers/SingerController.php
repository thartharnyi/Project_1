<?php

namespace App\Http\Controllers;

use App\Models\Singer;
use Illuminate\Http\Request;

class SingerController extends Controller
{
    public function show(Singer $singer){
        
        return view('singer_show',[
            'singer'=>$singer
        ]);
    }
}
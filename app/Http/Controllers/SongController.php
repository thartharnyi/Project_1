<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index(){
        $songQuery=Song::latest();
        if(request('search')){
            $songQuery->where('title','Like','%'.request('search').'%');
        }
        return view('songs',[
            'songs'=>$songQuery->paginate(3)
        ]);
    }
}
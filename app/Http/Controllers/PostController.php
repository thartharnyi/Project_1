<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(){
        return view('post.create');
    }
    public function store(){
        $cleanData=request()->validate([
            'username'=>['required'],
            'email'=>['required'],
            'password'=>['required'],
            'file'=>['required']
        ]);
        dd($cleanData);
    }
}
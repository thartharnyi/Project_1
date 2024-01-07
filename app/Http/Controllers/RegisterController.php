<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view('register.create');
    }

    public function store(){
        $cleanData=request()->validate([
            'name'=>['required','max:20','min:5'],
            'email'=>['required','max:20','email'],
            'username'=>['required','max:20'],
            'password'=>['required','min:8','max:20']
        ]);
        $user=new User();
        $user->name=$cleanData['name'];
        $user->email=$cleanData['email'];
        $user->username=$cleanData['username'];
        $user->password=$cleanData['password'];
        $user->save();
        return redirect('/')->with('message','Welcome '.$user->name) ;
    }

  
}
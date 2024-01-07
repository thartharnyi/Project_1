<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class LoginController extends Controller
{
    public function create(){
        return view('login.create');
    }

    public function store(){
        $cleanData=request()->validate([
            'email'=>['required','email',Rule::exists('users','email')],
            'password'=>['required']
        ],[
            'email.exists'=>"Your email doesn't exist"
        ]);
        
        if(auth()->attempt($cleanData)){
            return redirect("/")->with('message','Welcome ');
        } else {
            return back()->withErrors([
                'password' => 'Your password is something wrong'
            ]);
        } 
        //}else{
        //     return back()->withErrors([
        //         'email'=>'Your email does not exist'
        //     ]);
        // }
    }
}
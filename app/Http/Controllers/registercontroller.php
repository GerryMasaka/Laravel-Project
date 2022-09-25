<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class registercontroller extends Controller
{
    public function register(){
        return view('register');
    }

    public function save(Request $request){
        $fullname = $request->input('fullname');
        $email = $request->input('email');
        $password = $request->input('password');

        DB::insert('insert into registration(fullname,email,password)values(?,?,?)',
        [$fullname,$email,$password]);   
    }

}

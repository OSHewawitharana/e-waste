<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;


class userController extends Controller
{


public function index(){
    return view('registration');
}

public function store(Request $request)
{

    $this->validate($request,[
        'email' => 'required|unique:users|max:255|email',
        'password' => 'required|min:6|confirmed',
//        'cpassword'=>'required_with:password|min:6',
        'fullname'=>'required',
        'address'=>'required',
        'contactnumber'=>'required|min:10,max:10,numeric',
        'description'=>'max:225'

    ]);

    $table =new User();

    $table->email=$request->input('email');
    $table->password=$request->input('password');
    $table->full_name=$request->input('fullname');
    $table->contact_number=$request->input('contactnumber');
    $table->address=$request->input('address');
    $table->description=$request->input('description');

    $table->save();
    return redirect()->back()->with('status','success');

    }
}
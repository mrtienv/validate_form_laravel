<?php

namespace App\Http\Controllers;

use App\Models\UsersDetail;
use Illuminate\Http\Request;

class SignupController extends Controller
{   
    public $success;
    protected $rule = [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:6',
        'confirm_password' => 'required|same:password',
        'gender' => 'required',

    ];
    public function signup(Request $req) {
        $this->validate($req, $this->rule);
        //Save the record to DB
        UsersDetail::create([
            'first_name'=>$req->input('first_name'),
            'last_name'=>$req->input('last_name'),
            'email'=>$req->input('email'),
            'password'=>$req->input('password'),
            'confirm_password'=>$req->input('confirm_password'),
            'gender'=>$req->input('gender'),
            'status'=>'t'
        ]);
        $this->success = 'Sign up successfully!';
        return view('welcome', ['tika'=>$this->success]);
    }
}

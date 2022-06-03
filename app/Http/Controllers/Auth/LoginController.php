<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        //showing the form
        return view('auth.login');
    }


    public function store(Request $request){
        //acctually login the user in 

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(!auth()->attempt($request->only('email', 'password'), $request->remember)){
            return back()->with('status', 'Invalid credentials');
        };
        
        return redirect()->route('dashboard');

    }
}

<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class CustomAuthcontroller extends Controller
{
    public function Adualt(){
        return view('customAuth.index');
    }


    public function site(){
        return view('site');
    }


    public function admin(){
        return view('admin');
    }
    


    public function login() {
         return  view('auth.admin_login');
    }
    public function checklogin(Request $request) {
        $this->validate($request,[
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
    
        ]);
        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])){
          return redirect()->intended('/admin');}
          return back()->withInput($request->only('email'));
       
       
         
        
        }}






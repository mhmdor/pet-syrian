<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\profile;
use App\Traits\OfferTrait;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;


class profileController extends Controller
{   

    public function __construct()
    {
        $this->middleware('auth');
    }
    use OfferTrait;

    
    public function index()
    {
        $user=Auth::user();
        

        return view('users.profile')->with('user',$user);
    }

    
    
    public function update(Request $request)
    {
        

        $this->validate($request,[
            'firstname'=>'required',
            'lastname'=>'required',
            'city'=>'required',
            'gender'=>'required',
            
              ]);
             $user=Auth::user();

             if($request->has('photo')){
                $file_name=  $this->saveimage($request -> photo,'upload/photo/user');
                $user->photo = $file_name;
             }
              $user->firstname =$request->firstname;
              $user->lastname =$request->lastname;
              $user->city =$request->city;
              $user->gender =$request->gender;
              $user->mobile =$request->mobile;
             
               $user->update();
            
              return redirect()->back();

    }


    

    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    
      public function homePageView(){
       
        if(Auth::check()){
            $user = Auth::user();
            return view('homePage',['user'=>$user]);            
        }
        return redirect("login")->withSuccess('You are not allowed to access');
     }

      public function addProductFunction(){
        $user = Auth::user();
        return view('addProduct',['user'=>$user]);
     }
}
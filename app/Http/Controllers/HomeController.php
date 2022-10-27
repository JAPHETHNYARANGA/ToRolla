<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    
      public function homePageView(){
       
        if(Auth::check()){
            $user = Auth::user();
            $products = Products::all();
            return view('homePage',['user'=>$user, 'products'=>$products]);   
            
        }
        return redirect("/")->withSuccess('You are not allowed to access');
     }

      public function addProductFunction(){

        if(Auth::check()){
          $user = Auth::user();
          $products = Products::all();
          
          return view('addProduct',['user'=>$user, 'products'=>$products]);    
                 
         }
        return redirect("/")->withSuccess('You are not allowed to access');
        
      }

     
}
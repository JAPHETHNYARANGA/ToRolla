<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function addProduct(Request $request){
        $request->validate([
            'productName' =>'required',
            'productDescription' =>'required',
            'productLocation' =>'required',
            'productImage' =>'required',
        ]);
        $user = new Product();
         $user ->user_id = $uuid;
        $user -> name = $request->name;
        $user -> email = $request->email;
        $user -> phone_number = $request->phone_number;
        $user -> password =Hash::make($request->password);
        $res = $user->save();
        if($res){
            return redirect('login')->with('success', 'you have registered successfully');
        }else{
            return back() ->with('fail', 'Something went wrong. Please try again');
        }
    }

    
}
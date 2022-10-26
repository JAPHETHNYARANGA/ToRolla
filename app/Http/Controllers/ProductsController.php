<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    public function addProduct(Request $request){
        $request->validate([
            'productName' =>'required',
            'productDescription' =>'required',
            'productLocation' =>'required',
            // 'productImage' =>'required',
        ]);
        $user = new Products();
        $uuid = Auth::user()->uuid;
        $user ->user_id = $request->$uuid;
        $user -> product_name = $request->productName;
        $user -> product_description = $request->productDescription;
        $user -> product_location = $request->productLocation;
        // $user -> productCategory = $request->productImage;
        $res = $user->save();
        // Products::create($request->all());

        // return redirect()->route('home')
        //     ->with('success', 'Entry created.');
        if($res){
            return redirect('home')->with('success', 'product posted successfully');
        }else{
            return back() ->with('fail', 'Something went wrong. Please try again');
        }
    }

    
}
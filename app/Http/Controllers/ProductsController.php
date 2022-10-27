<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function addProduct(Request $request){

        if(Auth::check()){
            $request->validate([
                'productName' =>'required',
                'productDescription' =>'required',
                'productLocation' =>'required',
                'productCategory' =>'required',
                // 'productImage' =>'required',
            ]);
            $product = new Products();
            // $uuid = Auth::user()->user_id;
            $product ->user_id = Auth::user()->user_id;
            $product -> product_name = $request->productName;
            $product -> product_description = $request->productDescription;
            $product-> product_location = $request->productLocation;
            $product->product_category = $request->productCategory;
            // $user -> productCategory = $request->productImage;
            $res = $product->save();
           
            if($res){
                return redirect('home')->with('success', 'product posted successfully');
                // echo "<script>console.log('Debug Objects:12 " . $uuid . "' );</script>";
            }else{
                return back() ->with('fail', 'Something went wrong. Please try again');
            }         
           }
          return redirect("login")->withSuccess('You are not allowed to access');
        
    }
    
    public function viewUsersProducts(){
        if(Auth::check()){
            $user = Auth::user();
        
            $product = Products::all();
            // if(Auth::user()->user_id == Products::all()->user_id )
            // $product = Auth::user()->Products()->get();
    
            return view('viewUsersProducts',['user'=>$user,'product'=>$product]);          
           }
          return redirect("login")->withSuccess('You are not allowed to access');
            
    }
    
}
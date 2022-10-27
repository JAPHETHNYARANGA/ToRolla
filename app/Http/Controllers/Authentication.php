<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Str;


class Authentication extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

     
     public function registration(){
        return view('register');
     }
     
    
     public function customRegistration(Request $request){
        $request->validate([
            'name' => 'required',
            'phone_number' =>'required',
            'email' =>'required|email|unique:users',
            'password' =>'required'      
        ]);
        $user = new User();
        $uuid = Str::uuid()->toString();
        
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
     
     public function customLogin(Request $request){
        $request->validate([
            'email' =>'required|email',
            'password' =>'required'      
        ]);
        
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended('home')->withSuccess('Signed in');
        }
        return redirect("/")->withSuccess('Login details are not valid');
        
     }

     public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return Redirect('/');
     }

  

     public function showForgetPasswordForm(){
        
       return view('forgotPassword');                    
        
     }

     public function submitForgetPasswordForm(Request $request){
        echo'success'; 
     }

    
    
}
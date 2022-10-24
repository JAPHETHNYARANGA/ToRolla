<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


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

  

    // public function customLogin(Request $request){
    //     $request->validate([
    //         'email'=>'required',
    //         'password'=>'required'
    //     ]);

    //     $credentials = $request->only('email', 'password');
    //     if(Auth::attempt($credentials)){
    //         return redirect()->intended('homePage')
    //         ->withSuccess('Signed in');
    //     }
    //     return redirect("login")->withSuccess('Login Failed Please Try Again');
    // }

    

     
     public function registration(){
        return view('register');
     }
     
    
     public function customRegistration(Request $request){
        $request->validate([
            'name' => 'required',
            'phone_number' =>'required',
            'email' =>'required',
            'password' =>'required'      
        ]);
        $user = new User();
        $user -> name = $request->name;
        $user -> email = $request->email;
        $user -> phone_number = $request->phone_number;
        $user -> password = $request->password;
        $res = $user->save();
        if($res){
            return back() ->with('success', 'you have registered successfully');
        }else{
            return back() ->with('fail', 'you have registered successfully');
        }
        return redirect('homePage')->withSuccess('Something went wrong');
         echo "success";
     }
     
    //  public function create(array $data)
    //  {   
    //      return User::create([
    //      'name' => $data['name'],
    //      'phone_number' => $data['phone_number'],
    //      'email' => $data['email'],
    //      'password' => Hash::make($data['password'])
    //      ]);
    //  }
     
    //  public function homePage()
    //  {
    //     if(Auth::check()){
    //         return view('homePage'); 
    //     }
    //     return redirect('login')->withSuccess('You are Not allowed to access this page');
    //  }

    //  public function signOut(){
    //     Session::flush();
    //     Auth::logout();
  
    //     return Redirect('login');

    //  }
}
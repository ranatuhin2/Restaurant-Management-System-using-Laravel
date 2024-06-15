<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\People;
use App\Models\Menu;



class LoginController extends Controller
{
   public function login(){
    
    return view('login.login');
   
   }
   //Signup Function 
   public function signup(){
    return view('login.signup');
   }
   public function login_chk(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        //password check 
        //Fetching data from database 
        $data = new People();
        $data = People::where('email',$email)->get();
        if(empty($data[0])){
            return redirect('/admin_login')->with(['message'=>"Account doesn't exists"]);
           
        }
        else{
            $db_password = $data[0]->password;
            $pass = $db_password;
            if(password_verify($password,$db_password)){
             //Session Store Part
             $request->session()->put('id',$data[0]->id);
             if(session()->has('id'))
             return redirect('/');
            }
            else{
             return redirect('/admin_login')->with(['message'=>"Password doesn't Matched"]);
            }
        }
    


   }
   //Logout function
   public function logout(Request $request){
    if($request->session()->has('id')){
        $request->session()->forget('id');
        $request->session()->flush();
        return redirect('/')->with(['message'=>"You have successfully logged_out"]);
    }
   }
   public function save_signup(Request $request){
    $name = $request->input('name');
    $email = $request->input('email');
    $password = $request->input('password');
    $new_password = password_hash($password, PASSWORD_DEFAULT);
    $data = new People();
    $data->name=$name;
    $data->email=$email;
    $data->password=$new_password;
    $data->save();
    if($data){
        return redirect('/admin_login')->with(['re_message'=>"Wohoo!! You have successfully registered"]);
    }
   }
}


<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(Request $request){
      if(session()->has('id')){
        $name= $request->input('name');
        $email= $request->input('email');
        $subject =$request->input('subject');
        $message=$request->input('message');
        $data = new Contact();
        $data->name=$name;
        $data->email=$email;
        $data->subject=$subject;
        $data->message=$message;
        $data->save();
        return redirect('/contact');
      }else{
        return redirect('/admin_login')->with(['message'=>"Please Login first"]);

      }
       
    }
    public function contact_data(){
            $data=Contact::get();
        return view('admin.pages.contact.index')->with(['data'=>$data]);

    }
    
    public function delete_data($id){
            $delete_data=Contact::whereId($id)->delete();
        return redirect()->route('admin::get-contact')->with(['message'=>"Successfully Deleted"]);
        
    }
}
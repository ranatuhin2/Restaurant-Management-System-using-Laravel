<?php

namespace App\Http\Controllers\Booking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
  public function booking_view(Request $request){
       if(session()->has('id')){
         $name= $request->input('name');
         //  dd($name);
          $email= $request->input('email');
          $people= $request->input('people');
          $special_request= $request->input('special_request');
       //    inserting into database
          $data = new Booking();
          $data->name=$name;
          $data->email=$email;
          $data->people=$people; 
          $data->special_request=$special_request; 
          $data->save();
          
           return redirect('/booking')->with(['message'=>"booking submit successfull"]);
       }else{
         return redirect('/admin_login')->with(['message'=>"Please Login first"]);
       }

  }
  public function booking_data(){
      $datas= Booking::get();

      return view('admin.pages.booking.index',compact('datas'));
  
  }
  public function edit_booking($id){
   $data= Booking::find($id);
   return view('admin.pages.booking.edit',compact('data'));

}
 public function update_booking(Request $request){
   $id=$request->input('id');
   $name= $request->input('name');
   //  dd($name);
    $email= $request->input('email');
    $people= $request->input('people');
    $special_request= $request->input('special_request');
   
    $update= Booking::whereId($id)->update(['name'=>$name,'email'=>$email,'people'=>$people,'special_request'=>$special_request]);
    return redirect()->route('admin::booking-data')->with(['message'=>"successfully updated"]);
 }
  public function booking_delete($id){
   
      $delete_data=Booking::whereId($id)->delete();
   return redirect()->route('admin::booking-data')->with(['message'=>"Successfully Deleted"]);
   
}
// ----------booking from admin side-----------------------------//
    public function booking_add(){
      return view('admin.pages.booking.add');
    }
    public function save_bookingdata(Request $request){
      $name= $request->input('name');
      //  dd($name);
       $email= $request->input('email');
       $people= $request->input('people');
       $special_request= $request->input('special_request');

      // insert into database
       $data = new Booking();
       $data->name=$name;
       $data->email=$email;
       $data->people=$people; 
       $data->special_request=$special_request; 
       $data->save();
       return redirect()->route('admin::booking-data')->with(['message'=>"Successfully Added"]);
       
    }

}
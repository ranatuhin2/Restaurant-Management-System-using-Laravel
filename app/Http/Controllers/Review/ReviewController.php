<?php

namespace App\Http\Controllers\Review;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function add(){
        
        return view('admin.pages.testimonial.review');

       
    }
    public function save(Request $request){
        if(session()->has('id')){
            $title=$request->input('title');
        $description=$request->input('description');
        $image=$request->file('image');
        $image_name=time()."-".$image->getClientOriginalName();
        $location="upload_file";
        $image->move($location,$image_name);
        $data=new Review();
        $data->title=$title;
        $data->description=$description;
        $data->image=$image_name;
        $data->save();
        return redirect('/testimonial')->with(['message'=>"Thank you for sharing your amazing experience with us! We're so grateful to have you as a customer."]);
        }else{
            return redirect('/admin_login')->with(['message'=>"Please Login first"]);
        }
        
    }
    public function index(){
       
            $data=Review::get();
            return view('admin.pages.testimonial.index',compact('data'));
       
       
    }
    public function edit($id){
        
            $data=Review::find($id);
        return view('admin.pages.testimonial.edit',compact('data'));
       
        
    }
    public function update(Request $request){
        $id=$request->input('id');
        $title=$request->input('title');
        $description=$request->input('description');
        $image=$request->file('image');
        $data=Review::find($id);
        $old_image=$data->image;
        if(empty($image)){
            $data=Review::whereId($id)->update(['title'=>$title,'description'=>$description,'image'=>$old_image]);
        }else{
            $image_name = time()."-". $image->getClientOriginalName();
            $location = "upload_file";
            $image->move($location,$image_name);
            $update=Review::whereId($id)->update(['title'=>$title,'description'=>$description,'image'=>$image_name]);
        }
        return redirect()->route('admin::index-review')->with(['message'=>"Review updated successfully"]);
       
    }
    public function delete($id){
        
            $data=Review::whereId($id)->delete();
            return redirect()->route('admin::index-review')->with(['message'=>"You have Successfully Deleted"]);
       
       
    }
}

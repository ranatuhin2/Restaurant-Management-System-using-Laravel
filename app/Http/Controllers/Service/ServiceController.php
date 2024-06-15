<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function service_view(){
      
        return view('admin.pages.service.add');
        
    }
    public function service_save(Request $request){
        $title=$request->input('title');
        $description=$request->input('description');
        $image=$request->file('image');
        $image_name=time()."-". $image->getClientOriginalName();
        //dd($image);
        $location="upload_file";
        $image-> move($location,$image_name);

        $save= new Service();
        $save->title=$title;
        $save->description=$description;
        $save->image=$image_name;

        $save->save();
        return redirect()->route('admin::index-service')->with(['message'=>"Successfully Added"]);
    }
    public function service_index(){
        
            $data= new Service();
            $data=Service::get();
            return view('admin.pages.service.index', compact('data'));
        
       
    }
    public function edit_service($id){ 
       
            $abouts = Service::find($id);
            return view('admin.pages.service.edit', compact('abouts'));
        
       
      
    }
    public function service_update(Request $request){
        $id=$request->input('id');
        $title=$request->input('title');
        $description=$request->input('description');
        $image = $request->file('image');
        $data = Service::find($id);
        $old_image = $data->image;
        if(empty($image)){
            $update=Service::whereId($id)->update(['title'=>$title,'description'=>$description,'image'=>$old_image]);
        }else{
            $image_name = time()."-". $image->getClientOriginalName();
            $location = "upload_file";
            $image->move($location,$image_name);
            $update=Service::whereId($id)->update(['title'=>$title,'description'=>$description,'image'=>$image_name]);
        }
       
        
        return redirect()->route('admin::index-service')->with(['message'=>"sucessfully updated"]);
        


    }
    public function delete($id){
        
            $abouts=Service::whereId($id)->delete();
            return redirect()->route('admin::index-service')->with(['message'=>"sucessfully Deleted"]);
       
        
    }
}
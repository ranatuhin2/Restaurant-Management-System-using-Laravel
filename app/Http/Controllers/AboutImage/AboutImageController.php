<?php

namespace App\Http\Controllers\AboutImage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aboutimage;


class AboutImageController extends Controller
{
    public function add(){
       
        return view('admin.pages.aboutImage.add');
       
    }
    // public function edit(){
    //     return view('admin.pages.aboutImage.edit');
    // }
    public function save(Request $request){
        $title = $request->input('title');
        $image = $request->file('image');
        $image_name = time()."-".$image->getClientOriginalName();
        $location = "upload_file";
        $image->move($location,$image_name);
        //Inserting into tables
        $obj_data = new Aboutimage();
        $obj_data->title=$title;
        $obj_data->image=$image_name;
        $obj_data->save();
        return redirect()->route('admin::index_image')->with(['message'=>"Successfully Added"]);
    }
    //Index_image Function
    public function index(){
      
            $data = Aboutimage::get();
        return view('admin.pages.aboutImage.index')->with(['details'=>$data]);
       

    }
    //Edit Image Function
    public function image_edit($id){
            $data= Aboutimage::find($id);
            return view('admin.pages.aboutImage.edit',compact('data'));
       
     }
    //Image update
    public function image_update(Request $request){
        $id=$request->input('id');
        $title=$request->input('title');
        $image=$request->file('image');
        $data=Aboutimage::find($id);
        $old_image = $data->image;
        if(empty($image)){
            $data=Aboutimage::whereId($id)->update([
                'title'=>$title,
                'image'=>$old_image]);
        }else{
            $image_name=time()."-".$image->getClientOriginalName();
            $location="upload_file";
            $image->move($location,$image_name);
            //update query
            $data=Aboutimage::whereId($id)->update([
              'title'=>$title,
              'image'=>$image_name]);
        }
       
          return redirect()->route('admin::index_image')->with(['message'=>"Successfully updated"]);;
       }
       public function image_delete($id){
       
        $data= Aboutimage::whereId($id)->delete();
        return redirect()->route('admin::index_image')->with(['message'=>"Successfully Deleted"]);
   
 }
    
}

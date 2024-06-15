<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    //View Food Menu
    public function view_menu(){
        return view('admin.pages.menu.add');
    }
    //Food Menu index
    public function index_menu(){
        
       
            $abouts = new Menu();
            $abouts = Menu::get();
            return view('admin.pages.menu.index',compact('abouts'));
        
    }

    public function save_menu(Request $request){
        $item=$request->input('name');
        // $Item_id=$request->input('Item_id');
        $price=$request->input('price');
        $description=$request->input('description');
        $image=$request->file('image');
        $category=$request->input('category');
        $image_name = time()."-". $image->getClientOriginalName();
        $location = "upload_file";
        $image->move($location,$image_name);
        $data = new Menu();
        $data->Items=$item;
        // $data->Item_id=$Item_id;
        $data->price=$price;
        $data->category=$category;
        $data->description=$description;
        $data->image=$image_name;
        $affected_row = $data->save();
        if($affected_row){
            return redirect()->route('admin::menu-index')->with(['message'=>"Successfully added"]);
        }
        else{
            return redirect()->route('admin::menu-index')->with(['message'=>"Something went wrong"]);

        }
    }
    public function item_edit($id){
       
            $data=Menu::find($id);
        return view('admin.pages.menu.edit')->with(['data'=>$data]);
       
        
    }
    public function team_update(Request $request){
        $id=$request->input('id');
        $item=$request->input('name');
        // $Item_id=$request->input('Item_id');
        $price=$request->input('price');
        $description=$request->input('description');
        $image=$request->file('image');
        $category=$request->input('category');
        $data = Menu::find($id);
        $old_image=$data->image;
        if(empty($image)){
            $data=Menu::whereId($id)->update(['Items'=>$item, 'price'=>$price,'description'=>$description,'image'=>$old_image,'category'=>$category]);
        }else{
            $image_name = time()."-". $image->getClientOriginalName();
            $location = "upload_file";
            $image->move($location,$image_name);
            $data = new Menu();
            $data=Menu::whereId($id)->update(['Items'=>$item,'price'=>$price,'description'=>$description,'image'=>$image_name,'category'=>$category]);
        }
       
        return redirect()->route('admin::menu-index')->with(['message'=>"Successfully Updated"]);
    }

    public function item_delete($id){
       
            $data=Menu::whereId($id)->delete();
            
                return redirect()->route('admin::menu-index')->with(['message'=>"Successfully Deleted"]);
            
        
    }
}

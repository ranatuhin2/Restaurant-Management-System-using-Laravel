<?php

namespace App\Http\Controllers\Team;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mchef;

class TeamController extends Controller
{
    public function view(){
       
        return view('admin.pages.ourteam.add');
        
    }
    //team_save function
    public function save_team(Request $request){
        $name = $request->input('name');
        $designation = $request->input('designation');
        //Image Storing
        $image = $request->file('image');
        $image_name =time() ."-" . $image->getClientOriginalName();
        $location ="upload_file";
        //Image moving
        $image->move($location,$image_name);
        //Inserting into Database
        $data = new Mchef();
        $data->name=$name;
        $data->designation=$designation;
        $data->image = $image_name;
        $affected_row = $data->save();
        if($affected_row){
            return redirect()->route('admin::team-index')->with(['message'=>"Successfully updated"]);
        }else{
            return redirect()->route('admin::team-index')->with(['message'=>"Something went wrong"]);
        }
        
    }
    //Index page function
    public function index_team(){
       
            $data = Mchef::get();
            return view('admin.pages.ourteam.index',compact('data'));
        
        
    }
    public function team_edit($id){
        
            $data = Mchef::find($id);
            return view('admin.pages.ourteam.edit')->with(['data'=>$data]);
       
       
    }
    //Update team function
    public function update_team(Request $request){
        $id = $request->input('id');
        $name = $request->input('name');
        $designation = $request->input('designation');
        $image = $request->file('image');
        // dd($image);
        $db_data = Mchef::find($id);
        $old_image = $db_data->image;
        if(empty($image)){
            $data = Mchef::whereId($id)->update(['name'=>$name,'designation'=>$designation,'image'=>$old_image]);
       
        }else{
            
        $image_name =time() ."-" . $image->getClientOriginalName();
        $location ="upload_file";
        //Image moving
        $image->move($location,$image_name);
        //Updating into database
        $data = Mchef::whereId($id)->update(['name'=>$name,'designation'=>$designation,'image'=>$image_name]);
        }
      
        return redirect()->route('admin::team-index')->with(['message'=>"Successfully updated"]);
    }
    //Delete _team function
    public function delete($id){
        
            $data = new Mchef();
            $data = Mchef::whereId($id)->delete();
            return redirect()->route('admin::team-index')->with(['message'=>"Successfully deleted"]);
    }
}

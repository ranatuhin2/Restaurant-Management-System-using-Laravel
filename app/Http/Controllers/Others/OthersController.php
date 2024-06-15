<?php

namespace App\Http\Controllers\Others;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Others;

class OthersController extends Controller
{
    public function add_link(){
        return view('admin.pages.others.add');
    }
    public function save_link(Request $request){
        $linky=$request->input('linky');
        $linkm=$request->input('linkm');

        $data=new Others();
        $data->ytlink=$linky;
        $data->maplink=$linkm;

        $data->save();
        return redirect()->route('admin::link-index')->with(['message'=>"Successfully link added"]);
     }
     public function index_link(){
        $data= new Others();
        $data=Others::get();
        return view('admin.pages.others.index')->with(['data'=>$data]);
     }
     public function edit_link($id){
       $data=Others::find($id);
       return view('admin.pages.others.edit')->with(['data'=>$data]);
     }
    public function update_link(Request $request){
        $id=$request->input('id');
        $linky=$request->input('linky');
        $linkm=$request->input('linkm');
        $update=Others::whereId($id)->update(['ytlink'=>$linky,'maplink'=>$linkm]);
        return redirect()->route('admin::link-index')->with(['message'=>"successfully updated"]);
    }
    public function delete_link($id){
        //dd($id);
      $data=Others::where('id',$id)->delete();
      return redirect()->route('admin::link-index')->with(['message'=>"successfully deleted"]);
    }


}

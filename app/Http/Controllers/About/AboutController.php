<?php
namespace App\Http\Controllers\About;
use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function add(){
       
           
        return view('admin.pages.about.add');

    }
    public function save(Request $request){
        $save = new About();
        $save->title = $request->input('title');
        $save->description = $request->input('description');
        $save->exp = $request->input('exp');
        $save->chef = $request->input('chef'); 
        $save->save();

        return redirect()->route('admin::index_about');
    }
    public function index(){
       
            $abouts = About::get();
            return view('admin.pages.about.index',compact('abouts'));
       
       
    }
    //Edit Function
    public function edit($id){
        
            $about = About::find($id);
            return view('admin.pages.about.edit',compact('about'));
       
    }
    //Update function
    public function update(Request $request){
        $id = $request->input('id');
        $title = $request->input('title');
        $description = $request->input('description');
        $exp = $request->input('exp');
        $chef = $request->get('chef'); 
        $obj_about= About::whereId($id)->update(['title'=>$title,'description'=>$description,'exp'=>$exp,'chef'=>$chef]);

        
        return redirect()->route('admin::index_about');
    }
    public function viewa(Request $request){
        $data = new About;
        DB::table('about')->whereId($id)->update(['name'=>$name,'email'=>$email]);
        $res = $data->whereId($id)->get();
        $data->name = $request->input('name');
        $data->save();
        return redirect('/index',compact('data'));
        return redirect('/index')->with(['message'=>"Successfully Delete"]);
    }

    public function delete($id){
       
            $data = About::whereId($id)->delete();
            return redirect()->route('admin::index_about')->with(['message'=>"successfully deleted"]);
       
       
    }
}

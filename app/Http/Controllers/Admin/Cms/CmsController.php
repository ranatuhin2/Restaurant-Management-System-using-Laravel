<?php

namespace App\Http\Controllers\Admin\Cms;

use App\Http\Controllers\Controller;
use App\Models\Cms;
use Illuminate\Http\Request;

class CmsController extends Controller
{

    public function index($key)
    {
        $allCms = Cms::get();
        return view('admin.pages.meta_data.index',['allCms'=>$allCms]);
    }

    public function edit($key)
    {
        $data = Cms::where('key',$key)->first();
        return view('admin.pages.meta_data.edit',['data'=>$data]);
    }

    public function save(Request $request){
        $msg = [
            'title.required' => 'Please Enter Title',
        ];
        $this->validate($request, [
            'title' => 'required',
        ],$msg);

        if (empty($request->get('status'))){
            $status = "Inactive";
        }else{
            $status = $request->get('status');
        }
        $key = $request->get('key');

        $olddata = Cms::where('key',$key)->first();
        if (!empty($olddata)){
            $olddata->title = $request->get('title');
            $olddata->description = $request->get('description');
            $olddata->status = $status;
            $olddata->save();

            return redirect()->back()->with('success', 'Added Successfully');
        }else{
            $save = new Cms();
            $save->key = $key;
            $save->title = $request->get('title');
            $save->description = $request->get('description');
            $save->save();
            return redirect()->back()->with('success', 'Update Successfully');
        }

    }
}

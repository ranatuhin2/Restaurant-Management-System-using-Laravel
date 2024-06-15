<?php

namespace App\Http\Controllers\Admin\ContactInfo;

use App\Http\Controllers\Controller;
use App\Models\ContactInfo;
use Illuminate\Http\Request;

class ContactInfoController extends Controller
{
    public function index()
    {
        $allContact = ContactInfo::get();
        return view('admin.pages.contact_info.index',['allContact'=>$allContact]);
    }

    public function add()
    {

    }

    public function save(Request $request)
    {

    }

    public function edit($id)
    {
        $data = ContactInfo::where('id',$id)->first();
        return view('admin.pages.contact_info.edit',['data'=>$data]);
    }

    public function update(Request $request, $id)
    {
        $msg = [
            'email.required' => 'Please Enter Email',
            'phone_code.required' => 'Please Enter Phone Code',
            'phone.required' => 'Please Enter Phone Number',
            'website.required' => 'Please Enter Website',
            'address.required' => 'Please Enter Address',
            'phone.numeric' => 'Please Enter A Valid Phone Number',
            'email.email' => 'Please Enter A Valid Email',
        ];
        $this->validate($request, [
            'email' => 'required|email',
            'phone_code' => 'required',
            'phone' => 'required|numeric',
            'website' => 'required',
            'address' => 'required',
        ],$msg);

        $data = ContactInfo::where('id',$id)->first();
        $data->email = $request->get('email');
        $data->phone_code = $request->get('phone_code');
        $data->phone = $request->get('phone');
        $data->website = $request->get('website');
        $data->address = $request->get('address');
        $data->save();

        return redirect()->route('admin::contact')->with('success','Contact Info Update Successfully');

    }

    public function delete($id)
    {

    }

    public function status(Request $request)
    {
        $id = $request->get('id');
        $status = $request->get('status');
        if($status=='Active'){
            ContactInfo::where('id',$id)->update([
                'status' => 'Inactive',
            ]);
            $st='Inactive';
            $html='<a href="javascript:void(0);" class="btn btn-warning btn-sm" onclick="active_inactive_banner('.$id.','.$st.')" ><span class="fa fa-ban"></span> </a>&emsp;';
            return json_encode(array('id'=>$id,'html'=>$html, 'status'=>$st));
        }
        else{
            ContactInfo::where('id',$id)->update([
                'status' => 'Active',
            ]);
            $st='Active';
            $html = '<a href="javascript:void(0);" class="btn btn-success btn-sm" onclick="active_inactive_banner('.$id.','.$st.')"><span class="fa fa-check"></span> </a>&emsp;';
            return json_encode(array('id'=>$id,'html'=>$html, 'status'=>$st));
        }
    }
}

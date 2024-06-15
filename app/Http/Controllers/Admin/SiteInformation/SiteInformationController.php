<?php

namespace App\Http\Controllers\Admin\SiteInformation;

use App\Helper\admin\ImageUpload;
use App\Http\Controllers\Controller;
use App\Models\SiteInformationModel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteInformationController extends Controller
{
    /*** Information ***/
    public function information()
    {
        $siteInfo = SiteInformationModel::all();
        return view('admin.pages.site_info.index',compact('siteInfo'));
    }
    /*** Information Add ***/
    public function information_add()
    {
        $siteInfo = null;
        return view('admin.pages.site_info.add',compact('siteInfo'));
    }
    /*** Information Save ***/
    public function information_save(Request $request)
    {
        $msg = [
            'key.required' => 'Please Enter Key.',
            'value.required' => 'Plesae Enter Value.',
            'image.required' => 'Plesae Choose An Image.',
        ];
        if ($request->customRadio == 'No'){
            $this->validate($request, [
                'key' => 'required',
                'value' => 'required',
            ], $msg);
        }elseif ($request->customRadio == 'Yes'){
            $this->validate($request, [
                'key' => 'required',
                'image' => 'required',
            ], $msg);
        }else{

        }
//        try {
            $height = 128;
            $width = 128;
            $path = '/upload/images/info/';
            $userUpdate = SiteInformationModel::where('id', $request['id'])->first();
            $imageUpdate = $userUpdate['profile_picture'];
            if (!empty($request->image)) {
                $imageUpdate = ImageUpload::myUpdateImage($userUpdate['profile_picture'],$height,$width, $path, $request->image);
                $imageUpdate = url('/').$path.$imageUpdate;
            }
            if (!empty($userUpdate)){
                $userUpdate->is_image = $userUpdate['is_image'];
                if ($userUpdate['is_image'] == 'Yes'){
                    $userUpdate->value = $imageUpdate;
                }else{
                    $userUpdate->value = $request['value'];
                }
                $userUpdate->save();
                return redirect()->back()->with('success', 'Information Updated Successfull!');
            }else{
                $userUpdate = new SiteInformationModel();
                $userUpdate->key = $request['key'];
                $userUpdate->is_image = $request->customRadio;
                if ($request->customRadio == 'Yes'){
                    $userUpdate->value = $imageUpdate;
                }else{
                    $userUpdate->value = $request['value'];
                }
                $userUpdate->save();
                return redirect()->back()->with('success', 'Information Added Successfull!');
            }
//        }catch (Exception $exception){
//            return redirect()->back()->with('error','Something Wrong!');
//        }
    }
    /*** Information Edit ***/
    public function information_edit($id)
    {
        $siteInfo = SiteInformationModel::where('id',$id)->first();
        return view('admin.pages.site_info.add',compact('siteInfo'));
    }
}

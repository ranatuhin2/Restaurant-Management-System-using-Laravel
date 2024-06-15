<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Helper\admin\ImageUpload;
use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    /*** Profile ***/
    public function profile($name)
    {
        $user = User::where('slug_name',$name)->first();
        $session['password_success'] = Session::get('password_success');
        $session['password_error'] = Session::get('password_error');
        return view('admin.pages.profile.index',compact('user','session'));
    }
    /*** Profile Update ***/
    public function profile_update(Request $request)
    {
        $msg = [
            'name.required' => 'Please Enter Your Name.',
            'email.required' => 'Plesae Enter Your Email.',
            'phone.required' => 'Plesae Enter Your Phone Number.',
            'email.email' => 'Plesae Enter A Valid Email.',
            'phone.numeric' => 'Plesae Enter A Valid Phone Number.',
        ];
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
//            'phone' => 'numeric',
        ], $msg);
        try {
            $height = 128;
            $width = 128;
            $path = '/upload/images/profile/';
            $userUpdate = User::where('id', Auth::user()['id'])->first();
            $imageUpdate = $userUpdate['profile_picture'];
            if (!empty($request->image)) {
                $imageUpdate = ImageUpload::updateImage($userUpdate['image'], $path, $request->image);
//                $imageUpdate = url('/').$path.$imageUpdate;
            }
            $nameSlug = str_replace(' ','-',strtolower($request['name'])).'-'.Auth::user()['id'];
            $userUpdate->profile_picture = $imageUpdate;
            $userUpdate->name = $request->name;
            $userUpdate->slug_name = $nameSlug;
            $userUpdate->email = $request->email;
            $userUpdate->phone = $request->phone;
            $userUpdate->save();
            return redirect()->route('admin::profile',['name'=>$nameSlug])->with('success', 'Profile Updated Successfull!');
        }catch (Exception $exception){
            return redirect()->back()->with('error','Something Wrong!');
        }
    }
    /*** Password Update ***/
    public function password_update(Request $request)
    {
        $msg = [
            'old_password.required' => 'Please Enter Old Password.',
            'new_password.required' => 'Plesae Enter New Password.',
            'confirm_password.required' => 'Plesae Enter Confirm Password.',
        ];
        $this->validate($request, [
            'old_password' => 'required|min:6',
            'new_password' => 'required|min:6',
            'confirm_password' => 'required|min:6|required_with:new_password|same:new_password',
        ], $msg);
        try {
            $old_pass=$request->old_password;
            $new_pass=$request->new_password;
            $confirm_pass=$request->confirm_password;
            $id=Auth::user()->id;
            $pass= User::where('id',$id)->value('password');
            if(Hash::check($old_pass,$pass))
            {
                if($new_pass==$confirm_pass){
                    $password=Hash::make($new_pass);
                    $changePass=User::where('id',$id)->update([
                        'password' => $password,
                    ]);
                    if($changePass==true){
                        return redirect()->route('admin::profile',['name'=>Auth::user()['slug_name']])->with('password_success', 'Password Updated Successfull!');
                    }
                }else{
                    return redirect()->route('admin::profile',['name'=>Auth::user()['slug_name']])->with('password_error', 'New Password and Confirm Password are Not Matched !!!');
                }
            }
            else{
                return redirect()->route('admin::profile',['name'=>Auth::user()['slug_name']])->with('password_error', 'Old Password Not Matched !!!');
            }
        }catch (Exception $exception){
            return redirect()->back()->with('error','Something Wrong!');
        }
    }
    /*** Admin Logout ***/
    public function admin_logout()
    {
        Auth::logout();
        return redirect()->route('admin_login')->with('success','You have been successfully logged out!');
    }
}

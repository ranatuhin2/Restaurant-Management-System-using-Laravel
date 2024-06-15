<?php

namespace App\Http\Controllers\Admin\Login;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminLoginController extends Controller
{
    /*** Admin Login ***/
    public function admin_login()
    {
        return view('admin.login.login');
    }
    /*** Admin Login Check ***/
    public function admin_login_check(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_name' => 'required|email',
            'password' => 'required|min:6',
        ]);
        if ($validator->passes()) {
            try {
                $user_name = $request->user_name;
                $password = $request->password;
                if (Auth::attempt(array('email' => $user_name, 'password' => $password, 'user_type' => 'Admin'))) {
                    $check_email = Auth::user()->email;
                    $request->session()->put('email', $check_email);
                    $user_type = Auth::user()->user_type;
                    $request->session()->put('user_type', $user_type);
                    if ($user_type == 'Admin') {
                        $html = '';
                        $html .= '<div class="alert alert-success" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <i class="mdi mdi-account-check"></i>
                                    <strong>Successfull!</strong> You successfully loged In.
                                </div>';
                        return (array('success' => $html));
                    }
                } else {
                    $html = '';
                    $html .= ' <div class="alert alert-danger" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <i class="mdi mdi-account-alert"></i>
                                    <strong>Login Failed !!!</strong> Please check Your Email and Password.
                                </div>';

                    return (array('log_error' => $html));
                }
            }catch (Exception $exception){
                $html = '';
                $html .= ' <div class="alert alert-danger" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <i class="mdi mdi-account-alert"></i>
                                    <strong>Login Failed !!!</strong> Something Wrong.
                                </div>';
                return array('log_error'=>$html);
            }
        }else {
            return response()->json(['error' => $validator->errors()]);
        }
    }
}

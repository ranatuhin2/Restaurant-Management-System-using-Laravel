@php
    $info = \App\Helper\admin\siteInformation::siteInfo();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$info['site_name']}} | Log in</title>
    <link rel="icon" href="{{$info['fav_icon']}}" type="image/gif" sizes="16x16">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('/')}}/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{url('/')}}/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('/')}}/admin/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{url('/')}}/admin/dist/css/custom_admin.css">
</head>
<body class="hold-transition login-page" ng-app="myapp">
<div class="loader1" id="loader_run">
    <img src="{{url('/')}}/loader/1.gif">
</div>
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html">{{$info['site_name']}}</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body" ng-controller="formcontroller">
            <p class="login-box-msg">Sign in Admin</p>
            @include('messages')
            <div class="input-group" id="message_print">
            </div>
            <form method="post" ng-submit="loginForm()" autocomplete="off">
                <div class="input-group">
                    <input type="email" name="user_name" id="user_name" onkeypress="hide_error_msg(this.name)" ng-model="insert.user_name" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <span id="user_name_err" class="error-msg-print"></span>
                <div class="mb-3"></div>
                <div class="input-group">
                    <input type="password" class="form-control" name="password" id="password" onkeypress="hide_error_msg(this.name)" ng-model="insert.password" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <span id="password_err" class="error-msg-print"></span>
                <div class="mb-3"></div>
                <div class="row">
{{--                    <div class="col-8">--}}
{{--                        <div class="icheck-primary">--}}
{{--                            <input type="checkbox" id="remember">--}}
{{--                            <label for="remember">--}}
{{--                                Remember Me--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
{{--            <p class="mb-1">--}}
{{--                <a href="forgot-password.html">I forgot my password</a>--}}
{{--            </p>--}}
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->
<script src="{{url('/')}}/admin/dist/js/angular.min.js"></script>
<!-- jQuery -->
<script src="{{url('/')}}/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{url('/')}}/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{url('/')}}/admin/dist/js/adminlte.min.js"></script>
<script src="{{url('/')}}/admin/dist/js/custom_admin.js"></script>
<script> window.onLoad = stopLoader();
    /*** Stop Loader ***/
    function stopLoader() {
        document.getElementById("loader_run").style.visibility = "hidden";
    }
    /*** Login Check ***/
    var application = angular.module("myapp", []);
    application.controller("formcontroller", function($scope, $http){
        $scope.insert = {};
        document.getElementById('message_print').innerHTML = '';
        $scope.loginForm = function(){
            document.getElementById("loader_run").style.visibility = "visible";
            $http({
                method:"POST",
                url:"{{route('admin_login_check')}}",
                data:$scope.insert,
            }).then(function (response){
                var data = response.data;
                if(data.error) {
                    printErrorMsg(data.error);
                } else if (data.log_error){
                    document.getElementById('message_print').innerHTML = data.log_error;
                }else {
                    document.getElementById('message_print').innerHTML = data.success;
                    location.href = '{{route('admin::dashboard')}}';
                }
                document.getElementById("loader_run").style.visibility = "hidden";
            },function (error){
                document.getElementById("loader_run").style.visibility = "hidden";
                console.warn(error);
            });
        }
    });
</script>
</body>
</html>

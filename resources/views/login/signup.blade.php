<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{url('/')}}/login/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{url('/')}}/login/css/style.css">
    <link rel="stylesheet" href="{{url('/')}}/login/css/style.css">
    <style>
        .signup-image-link:hover{
            color:red;
        }
    </style>
    <script src="{{url('/')}}/login/passval.js"></script>
    <style>
        .text-danger{
            color:red;
        }
    </style>
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title"  >Sign up</h2>
                        <form method="POST" class="register-form" action="{{url('/save-signup')}}" id="register-form">
                        @csrf
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" required placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" onkeyup="passval()" name="password" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" required onkeyup="passval()" name="re_pass" id="con_pass" placeholder="Repeat your password"/>
                            </div>
                            <p class="text-danger" id="pass_error" ></p>
                            <p class="text-danger" id="reg_error" ></p>
                            
                            <!-- <b><section   id="pass_error" ></section></b> -->
                            <div class="form-group">
                                <input type="checkbox" required name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term"  class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="submit" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{url('/')}}/login/images/signup-image.jpg" alt="sing up image"></figure>
                       <b> <a href="{{url('/admin-login')}}" style="text-decoration:none;" class="signup-image-link">Already Member? Click here👈</a></b>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sing in  Form -->
      

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
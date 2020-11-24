<?php
session_start();
if(isset($_SESSION["uid"]))
{
header("location:dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Activity Logger - login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="pics/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    
      <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="css/styles.css">

</head>
<?php include_once("connect.php") ?>
    <script>

        $(document).ready(function() 
        {
        $('.login-info-box').fadeOut();
        $('.login-show').addClass('show-log-panel');
        $('#register-now').click(function(){
            $('.register-info-box').fadeOut(); 
                $('.login-info-box').fadeIn();
                
                $('.white-panel').addClass('right-log');
                $('.register-show').addClass('show-log-panel');
                $('.login-show').removeClass('show-log-panel');
        })
         $('#login-now').click(function(){
             $('.register-info-box').fadeIn();
                $('.login-info-box').fadeOut();
                
                $('.white-panel').removeClass('right-log');
                
                $('.login-show').addClass('show-log-panel');
                $('.register-show').removeClass('show-log-panel');
         })
       
  


            $("#signup").click(function()
            {
                var uid = $("#uidd").val();
                var pwd = $("#pwdd").val();
               // alert(uid);
                $.get("project-login.php?uid="+uid+ "&pwd="+pwd, function(response)
                {
                    // alert('2');
                    if(response=="Create Account")
                    alert(response);
                    else
                             location.href="dashboard.php";
                       
                });
            
            });

        });


       

    </script>
</head>
<body>


    <div class="white-panel">
        <div class="login-show" style="background-image: url('pics/bg.jpg');">
            <div class="container-login100" >
                <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                    <form class="login100-form validate-form" >
                        <span class="login100-form-title p-b-49">
                            Login
                        </span>

                        <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                            <span class="label-input100">Username</span>
                            <input class="input100" type="text" id="uidd" name="username" placeholder="Type your username">
                            <span class="focus-input100" data-symbol="&#xf206;"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <span class="label-input100">Password</span>
                            <input class="input100" type="password" id="pwdd" name="pass" placeholder="Type your password">
                            <span class="focus-input100" data-symbol="&#xf190;"></span>
                        </div>
                        <br>
                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn" id="signup">
                                    Login
                                </button>
                            </div>
                        </div>

                       

                    </form>
                </div>
            </div>
        </div>

		
        <div class="register-show" style="background-image: url('pics/bg.jpg');" >
            <div class="container-login100">
                <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                    <form class="login100-form validate-form" action=project-signup.php method="post" enctype="multipart/form-data">
                        <span class="login100-form-title p-b-49">
                            Sign Up
                        </span>

                        <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
                            <span class="label-input100">Username</span>
                            <input class="input100" type="text" name="uid" placeholder="Type your username">
                            <span class="focus-input100" data-symbol="&#xf206;"></span>
                        </div>

                        <div class="wrap-input100 validate-input m-b-23" data-validate="Name is required">
                            <span class="label-input100">Name</span>
                            <input class="input100" type="Namw" name="name" placeholder="Type your name">
                            <span class="focus-input100" data-symbol="&#xf190;"></span>
                        </div>
                        
                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <span class="label-input100">Password</span>
                            <input class="input100" type="password" name="pwd" placeholder="Type your password">
                            <span class="focus-input100" data-symbol="&#xf190;"></span>
                        </div><br>
                        
                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn">
                                    Create account
                                </button>
                            </div>
                        </div>

                        

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="login-reg-panel">

        <div class="login-info-box">
            <br>
            <h5>Have an account?</h5><button type="button" class="btn btn-primary btn-sm" id="login-now">Login Now</button>
           
        </div>
                            
        <div class="register-info-box">
            <h5>Don't have an account?</h5>
             <button type="button" class="btn btn-primary btn-sm" id="register-now">Register Now</button>
           
        </div>
    </div>


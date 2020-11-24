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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="pics/favicon.ico"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <title>Activity Logger - login</title>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<script src="https://code.jquery.com/jquery-3.3.1.min.js">
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<?php include_once("connect.php") ?>
  <script>
        $(document).ready(function() {


            //==-=-=-=-=-=-=-=-=-=
            $("#sign").click(function(){
                var uid = $("#uidd").val();
                var pwd = $("#pwdd").val();
 
                $.get("project-login.php?uid="+uid+ "&pwd="+pwd, function(response){
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



<hr>


    <!--div class=" container">
    	<h1> Activity Logger</h1>
        <div class="col-md-12">
            <nav class="navbar navbar-dark bg-dark  navbar-expand-lg ">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <input type="button" class="btn btn-outline-success my-2 my-sm-0 nav-tabs nav-justified text-white" value="Sign Up" data-target="#exampleModalCenter" data-toggle="modal">
                        </li>

                        <li>
                            <input type="button" class="btn btn-outline-success my-2 my-sm-0 text-white" value="Sign In" data-target="#exampleModalCenter2" data-toggle="modal">

                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </div-->

    <div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Don't have an account?
						</span>
					</div>

					<div class="flex-c-m">
						<a href="#" class="txt2">
							Sign Up
						</a>
					</div>


					</div>
				</form>
			</div>
		</div>
	</div>


    <!-- Modal -->
    <form action=project-signup.php method="post" enctype="multipart/form-data">
       
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">SIGN UP</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="col-md-12 form-group">
                                <label for="inputEmail4">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="inputEmail4">Username</label>
                                <input type="text" class="form-control" id="uid" placeholder="Username" name="uid">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="inputEmail4">Password</label>
                                <input type="password" class="form-control " id="pwd" name="pwd" placeholder="Password" p>
                            </div>


                          

                        </div>
                    </div>
                    <div class="modal-footer align-items-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name='btn' value="Save">Save changes</button>
                    </div>
                </div>
            </div>
        </div>



    </form>
    <form action="project-login.php" 
				method="get" enctype="multipart/form-data">
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">SIGN IN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-md-12 form-group">
                            <label for="uidd">Username</label>
                            <input type="text" class="form-control" id="uidd" placeholder="Username" name="uidd">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="inputEmail4">Password</label>
                            <input type="password" class="form-control " id="pwdd" placeholder="Password" name=pwdd>
                        </div>
                    </div>
                </div>
                <div class="modal-footer align-items-center">
                    <button  class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button   type = "button" id="sign" class="btn btn-primary">Sign IN</button>
                </div>
            </div>
        </div>
    </div>
    </form>

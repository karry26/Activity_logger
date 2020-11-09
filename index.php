<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
 >
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<?php include_once("views/connect.php") ?>
  <script>
        $(document).ready(function() {


            //==-=-=-=-=-=-=-=-=-=
            $("#sign").click(function(){
                var uid = $("#uidd").val();
                var pwd = $("#pwdd").val();
 
                $.get("views/project-login.php?uid="+uid+ "&pwd="+pwd, function(response){
                    // alert('2');
                    alert(response);
                    
                             location.href="views/dashboard.php";
                       
                    //$("#k").html(response);
                });
            });
            
        });

    </script>
</head>
<body>



<hr>


    <div class=" container">
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
    <form action="views/project-login.php" 
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

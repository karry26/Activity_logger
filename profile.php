<?php
session_start();
if(!isset($_SESSION["uid"]))
{
header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/main.css">
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

<script>
        function showpreview(file,ref)
        {

            if($(file)[0].files[0].size>2097152)
                {
                   // alert("<=2 MB");
                    return;
                }
        if (file.files && file.files[0])
        {
            var reader = new FileReader();
            reader.onload = function (e) {
                $(ref).prop('src', e.target.result);
            }
            reader.readAsDataURL(file.files[0]);
        }

    }

    </script>
  <script>
    $(document).ready(function(){
            dofetch();
//alert(Date.now());
        //==-=-=-=-=-=-=-=-=-=
            function dofetch()
        {
            var uid=$("#uid").val();


                $.getJSON("fetch-user.php?uid="+uid,function(aryJson)
                {


                    $("#mobile").val(aryJson[0].mobile);
                    $("#name").val(aryJson[0].name);
                    $("#email").val(aryJson[0].email);
                  //  $("#dob").val(aryJson[0].dob);
                    $("#address").val(aryJson[0].address);
                    $("#designation").val(aryJson[0].designation);



            var pic=aryJson[0].pic;
            $("#ppic").prop("src","uploads/"+pic);
            $("#hdn").val(pic);
            $("#dob").val(dob);
                });

        }



    });

    </script>
  </script>
  <link href="./css/style-starter.css" rel="stylesheet" type="text/css">
  <link href="//fonts.googleapis.com/css?family=Nunito:400,600,700,800,900&amp;display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Hind&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/stylea.css">

</head>
<body>
  <section class="w3l-header-4">
      <header id="headers4-block" class="editContent">
          <div class="container">
              <div class="d-grid nav-mobile-block header-align">
                  <div class="logo">
                      <a class="brand-logo editContent" href="index.php" style="outline: none; cursor: inherit;">Home</a>
                  </div>
                  <input type="checkbox" id="nav">
                  <label class="nav" for="nav"></label>
                  <nav>
                      <label for="drop" class="toggle"><span class="fa fa-bars" style="outline: none; cursor: inherit;"></span></label>
                      <input type="checkbox" id="drop">
                      <ul class="menu">
                          <li class="propClone"><a href="contacts.php">Contacts</a></li>
                          <li class="propClone"><a href="fixupmeeting.php">Fix up Meeting</a></li>
                          <li class="propClone"><a href="meetings.php">Your meetings</a></li>
                         <li class="propClone"><a href="profile.php">Your profile</a></li>
                         <li class="propClone"><a href="logout.php">logout</a></li>
                      </ul>
                  </nav>
              </div>
          </div>
      </header>
  </section>

<section>
 <div class="banner-main">
   <img src="img/2.jpg" alt="#"/>
    <div class="text-bg">
      <div class="container">
                <form action="profile-process.php"
                method="post" name="frm" enctype="multipart/form-data" class="main-form">
                  <h3>Profile</h3>
                  <div class="row">
                     <div class="col-md-9">
                        <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                <label for="uid">UID</label>
                                <input type="text"  required class="form-control" id="uid" name="uid" readonly placeholder="Enter User Id" value="<?php echo $_SESSION["uid"]?>">

                            </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                <label for="name">Name</label>
                                <input type="text"  class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter Name" >
                                
                            </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                <label for="mobile">Mobile Number</label>
                                <input type="text"  class="form-control" name="mobile" id="mobile" aria-describedby="emailHelp" placeholder="Enter mobile" >
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">

                                <label for="email">Email</label>
                                <input type="text"  class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter mail" >

                        </div>
                         <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">

                                <label for="email">Designation</label>
                                <input type="text"  class="form-control" name="designation" id="designation" aria-describedby="emailHelp" placeholder="student" >

                        </div>

                    </div>
                  </div>
                        <div class="col-md-4 offset-md-4 form-group text-center">
                            Profile Pic: <br>
                            <img src="pics/userinfo.png" class="mt-1 mb-1" width="100" height="100" alt="" id="ppic">
                            <input type="file" accept="image/*" multiple name="pic" id="pic" onchange="showpreview(this,ppic);">

                        </div>
                        <div class="col-md-12 text-center">

                            <input type="submit" value="Update"  name="btn"
                            id="btnUpdate" class="btn btn-primary">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </section>
</body>
</html>

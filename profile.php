<?php
session_start();

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
            //alert(document.getElementById("ppic").files.length);
            //alert(document.getElementById("ppic").files[0].size);
            //alert($(file)[0].files[0].size);
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
           
        //==-=-=-=-=-=-=-=-=-=
            function dofetch()
        {
          alert("wow");
            var uid=$("#uid").val();
     
                //var pwd=$("#pwd").val();
                //"ajax-check-uid.php?uid="+uid+"&pwd="+pwd;
                 
                $.getJSON("fetch-user.php?uid="+uid,function(aryJson)
                {
                   
                    
                    $("#mobile").val(aryJson[0].mobile);
                    $("#name").val(aryJson[0].name);
                    $("#email").val(aryJson[0].email);
                  //  $("#dob").val(aryJson[0].dob);
                    $("#address").val(aryJson[0].address);
                    $("#designation").val(aryJson[0].designation);
                    
                     
                    //====================
                 
                //-=--=-=-=====
            var pic=aryJson[0].pic; 
            $("#ppic").prop("src","uploads/"+pic);       
            $("#hdn").val(pic);     
            $("#dob").val(dob);     
                });
            
        }
        
        
        
        
          
        //=-=-===-===-=-=
      /*  $("#btnSave").click(function(){
            var res=confirm("R U Sure....");
            if(res==true)
                document.frm.submit();
        });*/
         
    });
     
    </script>
</head>
<body>
   <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 text-center  bg-primary">
                <h2>Profile </h2>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-10 offset-md-1 border">
                <form action="profile-process.php"
                method="post" name="frm" enctype="multipart/form-data">
                 
                <input type="hidden" name="hdn" id="hdn">
                    <div class="form-row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="uid">UID</label>
                                <input type="text"  required class="form-control" id="uid" name="uid" readonly placeholder="Enter User Id" value="<?php echo $_SESSION["uid"]?>">
                                <small id="errUid" class="form-text text-primary">error</small>
                            </div>
                        </div>
                       
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text"  class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter Name" >
                                <small id="errPwd" class="form-text text-muted">*</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mobile">Mobile Number</label>
                                <input type="text"  class="form-control" name="mobile" id="mobile" aria-describedby="emailHelp" placeholder="Enter mobile" >
                               
                            </div>
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text"  class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter mail" >
                             
                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="form-group">
                                <label for="email">Designation</label>
                                <input type="text"  class="form-control" name="designation" id="designation" aria-describedby="emailHelp" placeholder="Enter mail" >
                             
                            </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                               <label for="dob">Date of Birth</label>
                                <input  type="date"  class="form-control" name="dob" id="dob" aria-describedby="emailHelp" placeholder="d.o.b." >
                               
                           </div>
                            
                        </div>
                    </div>
 
                    
                   
 
                
                       
                    <div class="form-row">
                        <div class="col-md-4 offset-md-4 form-group text-center">
                            Profile Pic: <br>
                            <img src="pics/userinfo.png" class="mt-1 mb-1" width="100" height="100" alt="" id="ppic">
                            <input type="file" accept="image/*" multiple name="pic" id="pic" onchange="showpreview(this,ppic);">
 
                        </div>
                    </div>
 
                    <div class="form-row">
                        <div class="col-md-12 text-center">
                           
                            <input type="submit" value="Update"  name="btn"
                            id="btnUpdate" class="btn btn-primary">
                           
                        </div>
                    </div>
                </form>
 
            </div>
        </div>
    </div>
</body>
</html>
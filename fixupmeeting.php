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
        <link href="./css/style-starter.css" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Nunito:400,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Hind&amp;display=swap" rel="stylesheet">
    <style>

</style>
</head>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script>
 $(document).ready(function() {
        
             loadFunctions();
            function loadFunctions() {
                // alert(1);
                $.getJSON("fetch-contact.php", function(jsonAry) {
                  //alert(jsonAry);;
                    var i;
                    for (i = 0; i < jsonAry.length; i++) {

                        var item = document.createElement("option");
                        item.text = jsonAry[i].name;
                        item.value = jsonAry[i].uid;

                        //alert(document.getElementById("users"));
                        if(item.text!="")
                        document.getElementById("users1").append(item);
                    }
                     $('select').selectpicker();
                });
            }
          // 
            
          });


          </script>



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
    <div class="container"> <h1>Create New Meeting </h1>
    <hr>
        <form action="./savemeeting.php" method="post">
            <div class="form-row">
                <div class="col-md-12 form-group">
                    <label for="inputEmail4">Topic</label>
                    <input type="text" class="form-control" id="topic" placeholder="Topic Goes Here" name="topic">
                </div>
                <div class="col-md-12 form-group">
                    <label for="inputEmail4">Date</label>
                    <input type="date" class="form-control " id="date" name="date">
                </div>
                <div class="col-md-12 form-group">
                    <label for="inputEmail4">Time</label>
                    <input type="time" class="form-control " id="time" name="time">
                </div>
                <div class="col-md-12 form-group">
                    <label for="inputEmail4">Duration (in minutes)</label>
                    <input type="text" class="form-control " id="duration" name="duration" placeholder="Duration of the meeting">
                </div>
                 <div class="col-md-12 form-group">
                    <label for="inputEmail4">Users</label>
                    <select  id="users1" class=" form-control" name="users[]" multiple data-live-search="true" >
                      
                   </select>
           
                </div>
            
            




     <div class="modal-footer align-items-center">
                    <input type="submit" class="btn btn-primary" name="submit" value="Save Meeting">
                </div>
            </div>
        </form>
    </div>
</body>
</html>

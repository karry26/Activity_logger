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
</head>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
 >
</script>
<script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js">
      </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link href="./css/style-starter.css" rel="stylesheet" type="text/css">
<style>
body {
background-image: url('./pics/b8.jpg');
background-size: cover;
}
</style>
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
   <input type="hidden" id="id" name="meetingid" value='<?php echo $_POST['meetingid'] ?>'>
<div id="mycontroller" ng-app="mymodule" ng-controller="mycontroller" ng-init=pp()>
  <div class="container"> <h1>Edit History </h1><hr>

<div ng-repeat="oneObj in jsonAry " class="form row border border-dark mt-1">
  
  <div class="col-md-9 ">
   <p class="card-text"><span class="text-danger"> Edited By: </span>{{oneObj.edit_by}}</p>
                               <div class="form row">
                                <div class="col-md-6">
                                  Edited To:
                                  <textarea rows=2 cols ="40"> {{oneObj.new_min}} </textarea>

                               </div>
                               <div class="col-md-6">
                                Edited From:
                                  <textarea rows=2 cols=40> {{oneObj.prev_min}} </textarea>

                               </div>
                                
                                
  </div>
  <br><br>
</div>


 
            </div>


  </div>
  </div>
</body>
<script >
   var module = angular.module("mymodule", []);
        module.controller("mycontroller", function($scope, $http) {

            $scope.pp = function()
            {
            //
            //alert(  $("#id").val());
            var id=$("#id").val()
                $scope.jsonAry;
                $http.get("fetch-history.php?id="+id).then(fine, notfine);

                function fine(response) {
                  //alert(JSON.stringify(response.data));
                  var myArray=response.data;
                  var myReversedArray = new Array();
                  $(myArray).each(function (key) {
                     myReversedArray.unshift(myArray[key]);
                     });
                   myArray = myReversedArray;
                    $scope.jsonAry = myArray;
                  
                }
                function notfine(response) {
                    alert(JSON.stringify(response));
                }
            }
           
          });
        

</script>

</html>

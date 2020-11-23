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

</head>
<body>
<div id="mycontroller" ng-app="mymodule" ng-controller="mycontroller" ng-init=pp()>
  <div class="container"> <h1>Meetings Scheduled </h1><hr>

<div ng-repeat="oneObj in jsonAry " class="form row border border-dark mt-1">
  
  <div class="col-md-9">
   <p class="card-text"><span class="text-danger"> Scheduled By: </span>{{oneObj.admin}}</p>
                                <p class="card-text"><span class="text-danger"> Topic: </span>{{oneObj.topic}}</p>
                                <p class="card-text"><span class="text-danger"> Date : </span>{{oneObj.date}}</p>
                                <p class="card-text"><span class="text-danger"> Time: </span>{{oneObj.time}}</p>
                                <p class="card-text"><span class="text-danger"> Duration: </span>{{oneObj.duration}} min.</p>
                                <form action="editmeeting.php" method="post">
                                <input type="hidden"  name="idd" value='{{oneObj.id}}'>
                                <input type="submit" value="Edit">
                                </form>
                                
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
           // console.log(1);
           // console.log(1);
            $scope.pp = function()


            {
               
                $scope.jsonAry;
                $http.get("fetch-meetings.php").then(fine, notfine);


                function fine(response) {
                    
                    $scope.jsonAry = response.data;
                    //console.log( $scope.jsonAry[0].name);
                }

                function notfine(response) {
                    alert(JSON.stringify(response));
                }
            }});
        
        

       
       

</script>

</html>
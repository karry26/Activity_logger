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
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link href="./css/style-starter.css" rel="stylesheet" type="text/css">
<style>
body {
background-image: url('./pics/b8.jpg');
background-size: cover;
}
</style>
	</head>

	<script >
		 $(document).ready(function(){
            dofetch();
           
        //==-=-=-=-=-=-=-=-=-=
            function dofetch()
        {
            var uid=$("#id").val();
     
                //var pwd=$("#pwd").val();
                //"ajax-check-uid.php?uid="+uid+"&pwd="+pwd;
                 
                $.getJSON("json-fetch-meeting.php?id="+uid,function(aryJson)
                {
                    
                
                    
                    $("#text").val(aryJson[0].minutes);
         
                    $("#name").html(aryJson[0].admin);
                    $("#topic").html(aryJson[0].topic);
                 })
        }
    });
            
      

	</script>
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
		<div class="container">
			<div class="container"> <h1>Edit Meetings  </h1><hr>
				
					<div class="col-md-9">
						<div class="form-row">
							<h3>
							<div class="text-primary">Meeting Scheduled By : </div></h3>
							<h3><div id="name"> </div></h3>
						</div>
						<br>
						<div class="form-row">
							<h3>
							<div class="text-primary">Meeting Topic : </div></h3>
							<h3><div id="topic"> </div></h3>
						</div>
						<br>
						<div>

						<form action="saveminutes.php" method="post" >
							<div class="text-primary">Edit Minutes</div><br>
							<textarea rows=4 class="form-control" name="minutes" id="text"	placeholder="Edit Description"> </textarea>
		                 
		                    <input type='hidden' name='newid' id="id" value='<?php echo $_POST['meetingid'] ?>'>
		                    <br>
							<input type="submit" value="Save">
		                </form>
		            </div>

		           
		        </div>
		    </div>
		</div>
	</body>
</html>
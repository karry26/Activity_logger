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
    <title>Dashboard</title>
    
    <link href="./css/style-starter.css" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" href="components/bootstrap2/css/bootstrap.css">
	<link rel="stylesheet" href="components/bootstrap2/css/bootstrap-responsive.css">
	<link rel="stylesheet" href="css/calendar.css">

	<style>
        body 
        {
			background-image: url('pics/2.jpg');
			background-size: cover;
            
        }
    </style>
</head>


<?php include_once("connect.php") ?>

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
    <h3 class="banner-text mt-5 editContent">Welcome : <?php echo $_SESSION["uid"]?>
    <br></br>
	<div class="page-header">

		<div class="pull-right form-inline">
			<div class="btn-group">
				<button class="btn btn-primary" data-calendar-nav="prev"><< Prev</button>
				<button class="btn" data-calendar-nav="today">Today</button>
				<button class="btn btn-primary" data-calendar-nav="next">Next >></button>
			</div>
			<div class="btn-group">
				<button class="btn btn-warning" data-calendar-view="year">Year</button>
				<button class="btn btn-warning active" data-calendar-view="month">Month</button>
				<button class="btn btn-warning" data-calendar-view="week">Week</button>
				<button class="btn btn-warning" data-calendar-view="day">Day</button>
			</div>
		</div>

		<h3></h3>
		
	</div>

	<div class="row">
		<div class="span8">
			<div id="calendar"></div>
		</div>
		<div class="span3">
			<div class="row-fluid">
				
				<label class="checkbox">
					<input type="checkbox" value="#events-modal" id="events-in-modal"> Open events in modal window
				</label>
				<label class="checkbox">
					<input type="checkbox" id="format-12-hours"> 12 Hour format
				</label>
				<label class="checkbox">
					<input type="checkbox" id="show_wb" checked> Show week box
				</label>
				<label class="checkbox">
					<input type="checkbox" id="show_wbn" checked> Show week box number
				</label>
			</div>

			<h4>Events</h4>
			<ul id="eventlist" class="nav nav-list"></ul>
		</div>
	</div>

	<div class="clearfix"></div>
	<br><br>
	<br><br>

	<div class="modal hide fade" id="events-modal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h3>Event</h3>
		</div>
		<div class="modal-body" style="height: 400px">
		</div>
		<div class="modal-footer">
			<a href="#" data-dismiss="modal" class="btn">Close</a>
		</div>
	</div>

	<script type="text/javascript" src="components/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="components/underscore/underscore-min.js"></script>
	<script type="text/javascript" src="components/bootstrap2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="components/jstimezonedetect/jstz.min.js"></script>
	<script type="text/javascript" src="js/calendar.js"></script>
	<script type="text/javascript" src="js/app.js"></script>

</div>

</body>
</html>

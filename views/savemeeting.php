<?php
include_once("connect.php");

	$topic=$_POST["topic"];
	$time=$_POST["time"];
	$date=$_POST["date"];
	$admin = $_SESSION["uid"];

	$query="insert into meetings values('$topic','$date','$time','$admin')";
	mysqli_query($dbRef,$query);
	$msg=mysqli_error($dbRef);
	if($msg=="")
			echo "meeting created";
	else
			echo $msg;
?> 
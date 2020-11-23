<?php
session_start();
include_once("connect.php");
	$topic=$_POST["topic"];
	$time=$_POST["time"];
	$date=$_POST["date"];
	$duration=$_POST["duration"];
	$admin = $_SESSION["uid"];

	$query="insert into meetings values('$topic','$date','$time','$admin','$duration','')";
	mysqli_query($dbRef,$query);
	$msg=mysqli_error($dbRef);
	if($msg==""){
			echo '<script>alert("skjhdf")</script>'; 
			header("Location: ./dashboard.php");}
	else
			echo $msg;
?> 
<?php
session_start();
include_once("connect.php");

	$topic=$_POST["topic"];
	$time=$_POST["time"];
	$date=$_POST["date"];
	$duration=$_POST["duration"];
	$admin = $_SESSION["uid"];
	$users= implode($_POST["users"],";");
	//implode($_GET["users"],";");
	//echo $_GET["users"];
	$query="insert into meetings values('$topic','$date','$time','$admin','$duration','','','$users')";
	mysqli_query($dbRef,$query);
	$msg=mysqli_error($dbRef);
	if($msg==""){
		
		header("Location: ./dashboard.php");}
		
			//
	else
			echo $msg;
?> 
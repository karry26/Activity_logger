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
	//$d = new Date("$date"." "."$time");
	$mili2=strtotime($date)*1000;
	//echo $mili2;
	$time1=explode(":", $time);
	$mili=$mili2+$time1[0]*1000*3600 + $time1[1]*60*1000;
	$mili1=$mili+$duration*60*1000;
//var n = d.getMilliseconds();
	$query1="insert into events values ('','$topic','meetings.php','event-warning','$mili',$mili1)";
	mysqli_query($dbRef,$query);
	$msg=mysqli_error($dbRef);
	mysqli_query($dbRef,$query1);
	$msg1=mysqli_error($dbRef);
	if($msg=="" && $msg1=""){
		
		//echo $date;
		echo header("Location: ./dashboard.php");}
	
		//
		
			//
	else
			echo $msg.$msg1;
?> 
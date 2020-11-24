<?php
include_once("connect.php");

	$uid=$_POST["uid"];
	$pwd=$_POST["pwd"];
	$name=$_POST["name"];

	$pwd=md5($pwd);
	$query="insert into users values('$name','','$uid','$pwd' ,'','user.png','')";
	mysqli_query($dbRef,$query);
	$msg=mysqli_error($dbRef);
	if($msg=="")
			header("Location: ./index.php");
	else
			echo $msg;
?> 
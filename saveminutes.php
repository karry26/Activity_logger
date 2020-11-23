<?php
	include_once("connect.php");
	session_start();
	$user= $_SESSION["uid"];
	$idd=$_POST["newid"];
	$input = $_POST["minutes"];

	$query="UPDATE meetings SET minutes = '$input' WHERE id=$idd";
	mysqli_query($dbRef,$query);
	$msg=mysqli_error($dbRef);
	if($msg==""){
		$query_="Select * from meetings where id=$idd";

		//take values of meeting_id from above query 
		//admin from above query
		//edit_by from session user
		//prev_min from above query
		//new_min = $input at line 6
		//and complete query at 22 
		$query__='insert into history (meeting_id,admin,edit_by,prev_min,new_min) values ()';
		//echo $query__;
		//header("Location: ./meetings.php");
		}
	else
		echo $msg;
?>


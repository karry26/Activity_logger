<?php
	include_once("connect.php");
	session_start();
	$user= $_SESSION["uid"];
	$idd=$_POST["newid"];
	$input = $_POST["minutes"];
    $query_="Select * from meetings where id=$idd";
		$table=mysqli_query($dbRef,$query_);
	$ary=array();
	while($row=mysqli_fetch_array($table))
	{
		$ary[]=$row;
	}

 
		$admin=$ary[0]['admin'];
		$new_minutes=$ary[0]['minutes'];
	$query="UPDATE meetings SET minutes = '$input' WHERE id=$idd";
	mysqli_query($dbRef,$query);
	$msg=mysqli_error($dbRef);
	if($msg==""){
		
		$query__="insert into history (meeting_id,admin,edit_by,prev_min,new_min) values ($idd,'$admin','$user','$new_minutes','$input')";
		mysqli_query($dbRef,$query__);
        echo header("Location: ./meetings.php");
    
		}
	else
		echo $msg;
?>
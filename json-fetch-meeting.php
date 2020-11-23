<?php
	include_once("connect.php");
	$idd=$_GET["id"];
	$query="select * from meetings where id=$idd";

	$table=mysqli_query($dbRef,$query);
	$ary=array();
	while($row=mysqli_fetch_array($table))
	{
		$ary[]=$row;
	}
	echo json_encode($ary);
?>

<?php
    session_start();
    include_once("connect.php");
		$uid=$_GET["uid"];
		$pwd=$_GET["pwd"];
    $pwd=md5($pwd);
		
    $query="select * from users where uid= '$uid'  and pwd='$pwd'";
    //echo $query;

		$table=mysqli_query($dbRef,$query);
		//   0/1   possibility
        
		$count=mysqli_num_rows($table);
    // $row=mysqli_fetch_array($table);
    
    if($count==1){
            session_start();
            $row=mysqli_fetch_array($table);
            $_SESSION["uid"]=$uid;

            echo  $row["uid"];
    }
		else
        echo "Create Account";
?>

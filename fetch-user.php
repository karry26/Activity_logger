<?php
        include_once("connect.php");
        $uidd=$_GET['uid'];
        $query="select * from users where uid='$uidd'";
 
        $table=mysqli_query($dbRef,$query);
        $ary=array();
        while($row=mysqli_fetch_array($table))
        {
            $ary[]=$row;
        }
        echo json_encode($ary); 
                 
             
            ?>
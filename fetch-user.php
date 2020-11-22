<?php
        include_once("connect.php");
        $uidd=$_GET['uid'];
        $query="select * from users where uid='$uidd'";
 
        $table=mysqli_query($dbRef,$query);
                 
        //   0/1   possibility
 
        $ary=array();
        while($row=mysqli_fetch_array($table))
        {
            $ary[]=$row;
        }
        echo json_encode($ary); 
                 
             
            ?>
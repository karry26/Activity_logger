<?php
        include_once("connect.php");
        
        $query1="select * from events";
        $table1=mysqli_query($dbRef,$query1);
        $ary1=array();
        while($row1=mysqli_fetch_array($table1))
        {
            $ary1[]=$row1;
        }
        $file = file_get_contents('events.json.php');
        $data = json_decode($file);
        unset($file);//prevent memory 
        $myobj->success=1;
        $myobj->result=$ary1;

file_put_contents('events.json.php',json_encode($myobj,JSON_UNESCAPED_SLASHES));
unset($data);//release memory
      //  file_put_contents('data.json',json_encode($ary1));
          
        echo json_encode($ary1);
             
            ?>
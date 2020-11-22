<?php
        include_once("connect.php");
		
            
//echo $service;
        //$pwd=md5($pwd);
		/*$query="select uid from services where function= '$function'  and POSITION('$service' IN services)>0";*/
$query="select * from users";

//echo $query;

		$table=mysqli_query($dbRef,$query);
				
		//   0/1   possibility
        
		//$count=mysqli_num_rows($table);
             // $row=mysqli_fetch_array($table);
 $ary=array();
//$ary2=array();
		while($row=mysqli_fetch_array($table))
		{
			$ary[]=$row;
		}
    
		echo json_encode($ary);	
    
?>

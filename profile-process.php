<?php
include_once("connect.php");
 
    $uid=$_POST["uid"];
    
    $mobile=$_POST["mobile"];
    $btn=$_POST["btn"];
    $des=$_POST["designation"];
  
     
 
    $name= $_POST["name"];
  
   // $dob= $_POST["dob"];
    $email=$_POST["email"];
    $dob=$_POST["dob"];
  
     
  
//=====================Upload  Image==========
 
     
 
 

    $picname=$_FILES["pic"]["name"];
    $hdn=$_POST["hdn"];
     
    //$size=$_FILES["ppic"]["size"];
    $temp_name=$_FILES["pic"]["tmp_name"];
     
    if($picname=="")
        $picname=$hdn;
    else
        move_uploaded_file($temp_name,"uploads/".$picname);
    //echo "<h2>File Uploaded..</h2>";
     
   
    $query="update  users set name='$name',email='$email',mobile='$mobile',designation='$des' ,  pic='$picname',dob='$dob' where uid='$uid'";
     
    mysqli_query($dbRef,$query);
    $msg=mysqli_error($dbRef);
    if($msg=="")
            header("Location: ./dashboard.php");
    else
            echo $msg;

 
 
     
 
?>
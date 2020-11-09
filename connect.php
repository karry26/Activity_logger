<?php
	
	$dbRef=mysqli_connect("localhost","root","","activity_logger");
	
	$msg=mysqli_connect_error();
	if($msg!="")
		echo $msg;
	
	/*Importing:

mysql -u databaseuser -p -h localhost –-default-character-set=utf8 databasename < sqlfile.sql

Dumpping:

mysqldump -u databaseuser -p databasename --default-character-set=utf8 > sqlfile.sql
mysqldump < mysqldump options> | gzip > outputfile.sql.gz*/
?>
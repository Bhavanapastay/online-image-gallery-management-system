s<?php
$server="localhost";
$user="root";
$password="";
$dbname="Online gallery";
$con=mysql_connect($server,$user,$password);//used to establish the connection with server
mysql_select_db($dbname,$con);
if(!$con)
{
	echo "could not connect with db";
}



  ?>
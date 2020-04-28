<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$db = "year";
$conn = new mysqli($host,$user,$pass,$db);
if(mysqli_connect_error())
{
	echo "Connect Failed".mysqli_connect_error();
}else{
	//echo "Connect".$db."OK";
	$conn -> query("set name utf8");
}
?>
<?php
$servername= "localhost";
$username= "root";
$password= "";
$database= "port";
$conn= mysqli_connect($servername,$username,$password,$database);
if(!$conn){
	die('Failed Connection');
}


?>
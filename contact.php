<?php
if($_SERVER["REQUEST_METHOD"]== "POST"){
	include 'partial/_dbconnect.php';
	$name=$_POST["name"];
	$email=$_POST["email"];
	$project=$_POST["project"];
	$message=$_POST["message"];
	$sql="INSERT INTO `client` (`name`, `email`, `project`, `message`) VALUES ('$name', '$email', '$project', '$message')";
	$result=mysqli_query($conn,$sql);
	header("Location: index.php");
}


?>
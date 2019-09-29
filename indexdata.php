<?php
	if(isset($_POST['signin']))
	{
	$server="localhost";
	$username="root";
	$password="";
	$dbname="assignment";
	$email=$_POST['email'];
	$password=$_POST['pass'];
	$con=new mysqli($server,$username,$password,$dbname);
	if($con->connect_error)
	{
		die("connection failed");
	}
	$sql="SELECT name,email,password FROM student WHERE email='$email' AND password='$password'";
	$result=$con->query($sql);
	$sql1="SELECT name,email,password FROM teacher WHERE email='$email' AND password='$password'";
	$result1=$con->query($sql1);
	if($result->num_rows > 0)
	{
		include("profile.php");
	}
	if($result1->num_rpws > 0)
	{
		include("teacher.php");
	}


	}

?>
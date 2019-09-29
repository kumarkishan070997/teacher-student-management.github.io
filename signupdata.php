<?php
	include("index.php");
	if(isset($_POST['signup']))
	{
	$server="localhost";
	$username="root";
	$password="";
	$dbname="assignment";
	$name=$_POST['name'];
	$select=$_POST['sts'];
	$email=$_POST['emails'];
	$password=$_POST['pass1s'];
	// $con=new PDO("mysql:host=$server;dbname=$dbname",$username,$password);
	//  // $con=mysqli_connect($server,$username,$password,$dbname);
	// if($select=="Teacher")
	// {
 // 	$sql="INSERT INTO `teacher`(`email`, `password`) VALUES ($email,$password)";
	// $con->exec($sql);
	// if($con->exec($sql))
	// {
	// 	echo "true";
	// }
	// else
	// {
	// 	echo "false";
	// }
	//  }
	//  if($select=="Student")
	//  {
	//  	$sql1="INSERT INTO `student`(`email`, `password`) VALUES ($email,$password)";
	//  	$con->exec($sql1);
	//  }
	$con=new mysqli($server,$username,$password,$dbname);
	if($con->connect_error)
	{
		die("connection failed");
	}
	if($select=="Student")
	{
	$sql="INSERT INTO student(name,email,password) VALUES('$name','$email','$password')";
	$con->query($sql);
	if($con->query($sql)===TRUE)
	{
		echo "inserted";
	}
	else
	{
		echo "not inserted";
	}
	}
	if($select=="Teacher")
	{
	$sql="INSERT INTO teacher(name,email,password) VALUES('$name','$email','$password')";
	$con->query($sql);
	}
	}
	// $con=null;
?>
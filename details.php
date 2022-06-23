<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "registration";
$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn)
{
	die("connection Failed".mysqli_connect_error());
}

if (isset($_POST['save'])) 
{
    $Firstname = $_POST['firstname'];
    $Middlename = $_POST['middlename'];
    $Lastname = $_POST['lastname'];
    $ModeOfExam = $_POST['modeofexam'];
    $Subjects = $_POST['subjects'];
    $Gender = $_POST['gender'];
	$DateOfBirth = $_POST['dateofbirth'];
	$Country = $_POST['country'];
	$Phone = $_POST['phone'];
	$CurrentAdress = $_POST['address'];
	$Email = $_POST['email'];
	$Password = $_POST['password'];
	$Retype-password  = $_POST['password-repeat'];

    $sql_query="INSERT INTO details(firstname,middlename,lastname,course,gender,dateofbirth,country,phone,email,password) 
	values('$Firstname','$Middlename','$Lastname','$Course','$Gender','$Dateofbirth','$Country','$Phone','$Email','$Password')"));

	if(mysqli_query($conn,$sql_query))
	{
		echo "New details entry inserted successfully !";
	}
	else
	{
		echo "Error: " .$sql . "" . mysqli_error($conn);
	}
	mysqli_close($conn);
}
<?php

require("connection.php");


$first_name=$_POST["firstname"];
$last_name=$_POST["lastname"];
$user_email=$_POST["email"];
$password=$_POST["password"];

$sql= "INSERT INTO users(FirstName,LastName,Email,Password)
VALUES ('$first_name','$last_name','$user_email','$password')";

if(mysqli_query($conn,$sql)){
	echo "User Registered Successfully";
}
else{
	echo "Error".mysqli_error($conn);
}

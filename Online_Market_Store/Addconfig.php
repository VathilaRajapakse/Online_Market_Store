<?php

$name=$_POST["name"];
$phone=$_POST["mobile"];
$ainfo=$_POST["area"];



$conn=mysqli_connect('localhost','root','','online_market_store');

if($conn->connect_error){
	die("connection failed:".$conn->connect_error );
}

	


    $sql="INSERT INTO advertisement_add(name,phone_number,additional_information) VALUE('{$name}','{$phone}','{$ainfo}')";
	$result=mysqli_query($conn,$sql);
	
	if($result==1)
	{
		header("Location:payment.php");
	}
	else
	{
		echo 'Error';
	}


?>
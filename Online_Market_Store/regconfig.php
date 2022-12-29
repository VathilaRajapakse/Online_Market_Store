<?php

/*assign values to variable*/
$name=$_POST["uname"];
$username=$_POST["usname"];
$email=$_POST["email"];
$Contactnumber=$_POST["mobile"];
$Password=$_POST["pss"];
$rPassword=$_POST["rpss"];


$conn=mysqli_connect('localhost','root','','online_market_store');

/*get data from data base*/
$query=mysqli_query($conn,"SELECT * FROM advertiser_reg WHERE Name='$name'");
if(mysqli_num_rows($query)>0)
{
    echo'<script type="text/javascript">alert("Name is alredy use!...")</script>';/*check the name*/
}
else{


if($conn->connect_error){
	die("connection failed:".$conn->connect_error );
}

	

    /*insert data into data base*/
    $sql="INSERT INTO advertiser_reg(Name,User_Name,Email,Contact_Number,Password,Reenter_Password) VALUE('{$name}','{$username}','{$email}','{$Contactnumber}','{$Password}','{$rPassword}')";
	$result=mysqli_query($conn,$sql);
	
	if($result==1)
	{
		header("Location:userpro.php");/*link to next page*/
	}
	else
	{
		echo 'Error';
	}
}

?>
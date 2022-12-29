<?php
// $servername='localhost';
// $username='root';
// $password='';
// $dbname='online_market_store';
	$usernamee=$_POST['username'];
	$password=$_POST['password'];
	$repassword=$_POST['repassword'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$number=$_POST['cnumber'];
	$address=$_POST['address'];


$con=mysqli_connect('localhost','root','','online_market_store');
$query=mysqli_query($con,"SELECT * FROM user_reg WHERE  Username='$usernamee'");
if(mysqli_num_rows($query)>0)
{
    echo'<script type="text/javascript">alert("Name is alredy use!...")</script>';
}
else{


if($con->connect_error){
	die("connection failed".$con->connect_error);
}
	
	$sql="INSERT INTO user_reg(Username,Password,Reenter_Password,Name,Email,Contact_Number,Address)
			VALUE('{$usernamee}','{$password}','{$repassword}','{$name}','{$email}','{$number}','{$address}')";
	
	
	$result=mysqli_query($con,$sql);

if($result==1)
{
header("Location:User Profile.php");
}
else
{
echo 'Error';
}
}
?>
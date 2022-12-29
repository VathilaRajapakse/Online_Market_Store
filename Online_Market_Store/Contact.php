<?php
// $servername='localhost';
// $username='root';
// $password='';
// $dbname='online_market_store';
	$name=$_POST['Cname'];
	$Email=$_POST['Cmail'];
	$Contact=$_POST['Ccon'];
	$Message=$_POST['Cmsg'];
	

$con=mysqli_connect('localhost','root','','online_market_store');
$query=mysqli_query($con,"SELECT * FROM user_reg WHERE  Username='$name'");
if(mysqli_num_rows($query)>0)
{
    if($con->connect_error){
	die("connection failed".$con->connect_error);
}
	
	$sql="INSERT INTO contact(Name,email,contact,message)
			VALUE('{$name}','{$Email}','{$Contact}','{$Message}')";
	
	
	$result=mysqli_query($con,$sql);

if($result==1)
{
echo'<script type="text/javascript">alert("Submit Successful")</script>';
}
else
{
echo 'Error submit';
}
}
else{
	echo'<script type="text/javascript">alert("please log into the page")</script>';


}
?>
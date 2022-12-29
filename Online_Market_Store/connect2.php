<?php


	$username=$_POST['username'];
    $password=$_POST['password'];
    $repassword=$_POST['repassword'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['cnumber'];
    

  $con=mysqli_connect('localhost','root','','Online_market_store');
  $query=mysqli_query($con,"SELECT * FROM supplier_reg WHERE Username='$username'");
if(mysqli_num_rows($query)>0)
{
echo'<script type="text/javascript">alert("Name is alredy use!...")</script>';
}
else{


if($con->connect_error){

    die("connection failed".$con->connect_error);

}

    $sql="INSERT INTO supplier_reg(Username,Password,Reenter_Password,Name,Email,Contact_Number)

            VALUE('{$username}','{$password}','{$repassword}','{$name}','{$email}','{$number}')";
	$result=mysqli_query($con,$sql);
	

    if($result==1){

       header("Location:Supplier Profile Page.php");

    }

    else{

        echo'Error';

    }
	}
	
	

    
?>
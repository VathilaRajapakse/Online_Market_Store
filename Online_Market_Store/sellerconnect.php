<?php

$severname='localhost';
$username='root';
$password='';
$dbname='online_market_store';

$name=$_POST["name"];
$Mobile=$_POST["mobile"];
$Email=$_POST["email"];
$Address=$_POST["address"];
$DOB=$_POST["date"];
$Password=$_POST["password"];
$repassword=$_POST["repassword"];

$con=mysqli_connect($severname,$username,$password,$dbname);
$query=mysqli_query($con,"SELECT * FROM seller_reg  WHERE Name='$name'");
if(mysqli_num_rows($query)>0)
{
    echo'<script type="text/javascript">alert("Name is alredy use!...")</script>';

}
else
{

if($con->connect_error){
    die("connection faild :".$con->connect-error);
}
    
    

   

    $sql="INSERT INTO seller_reg(Name,Phone,Email,Address,dob,Password,repassword)
          VALUE('{$name}','{$Mobile}','{$Email}','{$Address}','{$DOB}','{$Password}','{$repassword}')";
    $result=mysqli_query($con,$sql);

    
if($result==1){
    //echo"registration succesfuly";
    header("Location:sellerprofile.php");
}
else{
    echo"error";
}
}

?>
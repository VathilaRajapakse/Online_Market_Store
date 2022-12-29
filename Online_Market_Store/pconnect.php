<?php

$severname='localhost';
$username='root';
$password='';
$dbname='online_market_store';

$user=$_POST["Owner"];
$Password=$_POST["pass"];
$cvv=$_POST["password"];
$card=$_POST["card"];
$cardm=$_POST["months"];
$cardy=$_POST["years"];


$con=mysqli_connect($severname,$username,$password,$dbname);

$query=mysqli_query($con,"SELECT * FROM user_reg WHERE Username='$user' AND Password='$Password'");
if(mysqli_num_rows($query)>0)
{
   
   if($con->connect_error){
    die("connection faild :".$con->connect-error);
}
    
    

   

    $sql="INSERT INTO payment( Username,Password,CVV,Card_number,Months,Year)
          VALUE('{$user}','{$Password}','{$cvv}','{$card}','{$cardm}','{$cardy}')";
    $result=mysqli_query($con,$sql);

    
if($result==1){

    echo"payment succesfully<br>";
    
}
else{
    echo"error";
}

   

}
else
{
    echo'<script type="text/javascript">alert("not login.")</script>';


}
?>
<?php
$severname='localhost';
$username='root';
$password='';
$dbname='online_market_store';

/*asign data to variables*/
$owner=$_POST["Owner"];
$cvv=$_POST["pwd"];
$card=$_POST["card"];
$cardm=$_POST["months"];
$cardy=$_POST["years"];


$con=mysqli_connect($severname,$username,$password,$dbname);
/*checking card bumber and cvv*/

$query=mysqli_query($con,"SELECT * FROM apayment WHERE card_number='$card' OR cvv='$cvv'");
if(mysqli_num_rows($query)>0)
{
    echo'<script type="text/javascript">alert("invalid card number or CVV number")</script>';
}
else
{
if($con->connect_error){
    die("connection faild :".$con->connect-error);
}
   
   
   /*insert data to data base*/
   
    $sql="INSERT INTO apayment( owner,cvv,card_number,month,year) VALUE('{$owner}','{$cvv}','{$card}','{$cardm}','{$cardy}')";
    $result=mysqli_query($con,$sql);
   
if($result==1){
    echo'<script type="text/javascript">alert("Payment Successful!..Your ad will be publish soon")</script>';
   
}
else{
    echo"error";
}
}
?>
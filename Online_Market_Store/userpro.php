<html>




<head>
<title>Vathi Store</title>

<!--font awesome cdn link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="stylesAye/final.css">

<style>
body{background-color:#C0C0C0;
background-image: url('images/89.png');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;}
</style>



</head>



<body class="picone">



<header>
<div class="header-1">
<img src="imagesAye/Vathi.jpg" alt="vathi store" width="85" height="80">
<div>

</div>

</form>



</div>
<div class="header-2">
<nav class="navbar">
   <a href="home.html">HOME</a>
   <a href="shop.html">SHOP</a>
   <a href="About US.html">ABOUT</a>
   <a href="Contact page.html">CONTACT</a>
   <a href="category.html">CATEGORY</a>




</nav>
<form action="" class="search-box-container">
<input type="search" id="search-box"
placeholder="search here..">
<label for="search-box" class="fas fa-search"></label>



</form>





</div></header>
<div><table id="second" border="0" style="widtd:50%">
<tr>
<td align="right">Click Here To Add Advertisement</td>
<td><a href="Addadvertisement.html"><input type="button" value="Add Advertisement" style="width: 127px;background-color: #4CAF50; color: white; cursor: pointer; "></a></td>
</tr>
</table></div><br><br><br>



<div style="font-size:22px; font-weight:bold; color:white;"><center><br>Advertiser profile</center></div><br><br>



<center><form action="userpro.php" method="post" >
<table id="second" border="0" align="center" style="widtd:100%">
<tr>
<td id="right"><label for="user">User name</label></td>
<td colspan="2"><input type="text" size="70" name="namee"></td>

</tr>
<tr>
<td id="right"><label>Password</label></td>
<td colspan="2"><input type="password" size="70" name="password"></td>
<td></td>

</tr>

</table></center>







<table align="center" id="second" border="0" style="widtd:100%">
<tr>
<center><td align="right" ><input type="submit" value="Submit" style="width: 100px;background-color: #5499C7; color: white; cursor: pointer;" name="usubmit"></td></center>


</tr>
</table><br>





<?php
if(isset($_POST["usubmit"])){
$stuName = $_POST["namee"];
$password=$_POST['password'];



$con=mysqli_connect('localhost','root','','online_market_store');



$sql= "SELECT * FROM advertiser_reg where User_Name LIKE '%$stuName%' AND Password='$password' ";



if($result=$con->query($sql)){
if($result->num_rows > 0){

echo("<table border='0'  style='width:100%; height:5%'>");
echo ("<tr align='center'>");
echo ("<td bgcolor=#8993be><font color=#232531><h1>"."Name"."</h1></td>");
echo ("<td bgcolor=#8993be><font color=#232531><h1>"."User Name"."</h1></td>");
echo ("<td bgcolor=#8993be><font color=#232531><h1>"."Email"."</h1></td>");
echo ("<td bgcolor=#8993be><font color=#232531><h1>"."Contact number"."</h1></td>");
echo ("<td bgcolor=#8993be><font color=#232531><h1>"."Password"."</h1></td>");


echo ("</tr>");




while($row = $result->fetch_assoc()){

echo ("<tr align='center'>");
echo ("<td bgcolor=#8993be style='font-size:10px'><font color=#232531><h1>" . $row['Name']. "</h1></td>");
echo ("<td bgcolor=#8993be style='font-size:10px'><font color=#232531><h1>" . $row['User_Name'] . "</h1></td>");
echo ("<td bgcolor=#8993be style='font-size:10px'><font color=#232531><h1>" . $row['Email'] . "</h1></td>");
echo ("<td bgcolor=#8993be style='font-size:10px'><font color=#232531><h1>" . $row['Contact_number'] . "</h1></td>");
echo ("<td bgcolor=#8993be style='font-size:10px'><font color=#232531><h1>" . $row['Password'] . "</h1></td>");
echo ("</tr>");
}
echo("</table>");



}else{
echo "Invalid username or password";
}
}
}
?>



<footer class="footer">
<div class="container-1">
<div class="row">
<div class="footer-col">
<h4>company</h4>
<ul>



<li><a href="About US.html">ABOUT</a></li>
<li><a href="category.html">CATEORGY</a></li>
<li><a href="Contact page.html">contact</a></li>
<li><a href="shop.html">shop</a></li>
</ul>



</div>
<div class="footer-col">
<h4>online shop</h4>
<ul>



<li><a href="mens fashion.html">MEN FASHION</a></li>
<li><a href="womens fashion.html">womens FASHION</a></li>
<li><a href="bags.html">BAG</a></li>
<li><a href="watches.html">watches</a></li>
<li><a href="Furniture.html">Furniture</a></li>
<li><a href="Clearning.html">Clearning ITEM</a></li>
</ul>



</div>
<div class="footer-col">
<h4>our service</h4>
<ul>



<li><a href="FAQ.HTML">FAQ</a></li>
<li><a href="Advertiserregistration.php">advertiser registration</a></li>
<li><a href="Supplier Registration.html">supplier registration</a></li>
<li><a href="seller registation.html">seller registration</a></li>
<li><a href="payment.html">PAYMENT OPTION</a></li>
</ul>



</div>
<div class="footer-col">
<h4>follow us</h4>
<ul>



<li><a href="#"><img src="imagesAye/fa.png" alt="" width="30" height="30"></a></li>
<li><a href="#"><img src="imagesAye/tw.png" alt="" width="30" height="30"></a></li>
<li><a href="#"><img src="imagesAye/wa.png" alt="" width="30" height="30"></a></li>

</ul>



</div>




</div>





</div>




</footer>











</body>



</html>
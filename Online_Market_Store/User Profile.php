<html>


<head>
<link rel="stylesheet" href="styles1/Style.css">

 <title>Vathi Store</title>
    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="styles1/Style.css">
	
<style>
body{background-color:#C0C0C0;
background-image: url('images1/89.png');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;}
</style>

</head>

<body class="picone">

 <header>
        <div class="header-1">
        <img src="images1/Vathi.jpeg" alt="vathi store" width="85" height="80">
        <div>
            <img src="images1/My.png" alt="vathi" width="80" height="80">
            <b>My Account</b>
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
				<a href="User Profile.html">MY ACCOUNT</a>
				<a href="FAQ.html">FAQ</a>


            </nav>
            <form action="" class="search-box-container">
                <input type="search" id="search-box"
                placeholder="search here..">
                <label for="search-box" class="fas fa-search"></label>

            </form>
         


         
        </div>



    </header><br><br>

<div style="font-size:22px; font-weight:bold;"><center><br>User profile</center></div><br><br>

	    <center><form method="post" >
		<table id="secondT" border="0" align="center" style="widtd:100%">
			<tr>
				<td id="right"><label for="user"><b>User name</b></label></td>
				<td colspan="2"><input type="text" size="70" name="namee"></td>
				
			</tr>
			<tr>
				<td id="right"><label><b>Password</b></label></td>
				<td colspan="2"><input type="password"  size="70" name="password"></td>
				<td></td>
		
			</tr>
			
	</table></center>

	
				 

<br><br><center><table  align="center" id="second" border="0" style="widtd:100%"></center>
<tr>
<td  align="right" ><input  type="submit" value="Submit" style="width: 100px;background-color: #5499C7; color: white; cursor: pointer;" name="usubmit"></td>

<center><td  align="left"><a href="Edit user.php"><input type="button" value="Update my profile" style="width: 150px;background-color: #5499C7; color: white; cursor: pointer;" ></a></td></center>
</tr>
</table><br>

<div class="backimage"></div>



<?php
if(isset($_POST["usubmit"])){
$stuName = $_POST["namee"];
$password=$_POST['password'];

$con=mysqli_connect('localhost','root','','online_market_store');

$sql= "SELECT * FROM user_reg where Username LIKE '%$stuName%' AND Password='$password' ";

if($result=$con->query($sql)){
if($result->num_rows > 0){
	
echo("<table border='1' align='center' style='width:65%'>");
echo ("<tr>");
echo ("<td bgcolor=#fbbf3d><h1>"."Username"."</h1></td>");
echo ("<td bgcolor=#fbbf3d><h1>"."Password"."</h1></td>");
echo ("<td bgcolor=#fbbf3d><h1>"."Re-enter password"."</h1></td>");
echo ("<td bgcolor=#fbbf3d><h1>"."Name"."</h1></td>");
echo ("<td bgcolor=#fbbf3d><h1>"."E-mail"."</h1></td>");
echo ("<td bgcolor=#fbbf3d><h1>"."Contact number"."</h1></td>");
echo ("<td bgcolor=#fbbf3d><h1>"."Address"."</h1></td>");

echo ("</tr>");


while($row = $result->fetch_assoc()){
	
echo ("<tr>");
echo ("<td bgcolor=#f8fcb9><h1>". $row['Username']. "</h1></td>");
echo ("<td bgcolor=#f8fcb9><h1>" . $row['Password'] . "</h1></td>");
echo ("<td bgcolor=#f8fcb9><h1>" . $row['Reenter_password'] . "</h1></td>");
echo ("<td bgcolor=#f8fcb9><h1>" . $row['Name'] . "</h1></td>");
echo ("<td bgcolor=#f8fcb9><h1>" . $row['Email'] . "</h1></td>");
echo ("<td bgcolor=#f8fcb9><h1>" . $row['Contact_Number'] . "</h1></td>");
echo ("<td bgcolor=#f8fcb9><h1>" . $row['Address'] . "</h1></td>");
echo ("</tr>");
}
echo("</table>");

}else{
echo "Invalid username or password";
}
}
}
?>
<br><br><br>


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
                <li><a href="Clearning.html">Slippers</a></li>
            </ul>

        </div>
        <div class="footer-col">
            <h4>our service</h4>
            <ul>

                <li><a href="FAQ.html">FAQ</a></li>
                <li><a href="Advertiserregistration.html">advertiser registration</a></li>
                <li><a href="Supplier Registration.html">supplier registration</a></li>
                <li><a href="seller registation.html">seller registration</a></li>
                <li><a href="payment.html">PAYMENT OPTION</a></li>
            </ul>

        </div>
        <div class="footer-col">
            <h4>follow us</h4>
            <ul>

                <li><a href="#"><img src="images1/FB.png" alt="" width="30" height="30"></a></li>
                <li><a href="#"><img src="images1/Twitter.png" alt="" width="30" height="30"></a></li>
                <li><a href="#"><img src="images1/Wt.png" alt="" width="30" height="30"></a></li>
                
            </ul>

        </div>
        


    </div>



</div>

    
</footer>





  
               

</body>

</html>
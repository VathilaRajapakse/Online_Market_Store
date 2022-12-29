<html>


<head>
<link rel="stylesheet" href="Style.css">

 <title>Vathi Store</title>
    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="Style.css">

<style>
body{background-color:#C0C0C0;
background-image: url('images1/123.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;}
</style>

</head>

<body>

 <header>
        <div class="header-1">
        <img src="images1/vathi.jpeg" alt="vathi store" width="85" height="80"/>
        <div class="icons">
            <img  src="images1/aa.jpeg" alt="vathi" width="80" height="80">
            <b>  <a href="User Registartion page.html" class="btn1">user registration</a></b>


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
         


         
        </div>



    </header><br><br><br><br>

<div style="font-size:22px; font-weight:bold;"><center><br>User Login page</center></div><br>

	    <form method="post" action="Userlogin.php" >
		<table id="second" border="0" align="center" style="width:100%">
			<tr>
				<td id="right"><label for="user">User name</label></td>
				<td colspan="2"><input type="text" size="100" name="namee" ></td>
					
			</tr>
			
			<tr>
				<td id="right"><label>Password</label></td>
				<td colspan="2"><input type="password"  size="100" name="passs" ></td>
				<td></td>
		
			</tr>
			
			

<table  align="center" id="second" border="0" style="widtd:100%">
<tr><br><br>
<center><input  type="submit" value="Login" style="width: 75px;background-color: #808080; color: white; cursor: pointer;" name="btnsubmit"></center><br>

		
				<center><div class="bottom-text">
					<a href="Forgot page.html">Forgot the Password</a><br><br>
				  Don't have account? <a href="User Registartion page.html">Sign up</a>
				</div></center>

</table><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php
$severname='localhost';
$username='root';
$password='';
$dbname='online_market_store';


$con=mysqli_connect($severname,$username,$password,$dbname);
if(isset($_POST["btnsubmit"])){
	$name=$_POST["namee"];
	$pass=$_POST["passs"];
    $query=mysqli_query($con,"SELECT * FROM user_reg WHERE Username='$name' AND Password='$pass'");
if(mysqli_num_rows($query)>0)
{
    header("Location:User Profile.php");
}
else{
    echo'<script type="text/javascript">alert("invalid name or password")</script>';
}

}
?>

<!--footer section-->
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







<!--footer section end-->   
</body>

</html>
<html>


<head>
<link rel="stylesheet" href="styles3/Login.css">

 <title>Vathi Store</title>
    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="styles3/Style.css">

<style>
body{background-color:#C0C0C0;
background-image: url('image/l1.jpg');
  background-attachment: fixed;  
  background-size: cover;}
</style>

</head>

<body>

 <header>
        <div class="header-1">
        <img src="image/vathi.jpg" alt="vathi store" width="85" height="80"/>
        <div class="icons">
            <img  src="image/account.jpeg" alt="vathi" width="80" height="80">
            <b>  <a href="#" class="btn1">user registration</a></b>


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



    </header><br><br><br>

<div style="font-size:22px; font-weight:bold;color:white"><center><br>Supplier Login</center></div><br>

	    <form method="post" action="Supplier Login.php" >
		<table id="second" border="0" align="center" style="widtd:100%">
			<tr>
				<td id="right"><label class="LA" for="user">User name*</label></td>
				<td colspan="2"><input type="text" size="60" name="name"></td>
				
		
			</tr>
			<tr>
				<td id="right"><label class="LA">Password*</label></td>
				<td colspan="2"><input type="password"  size="60" name="pass"></td>
				<td></td>
		
			</tr>
	
                 </table>

<table  align="center" id="second" border="0" style="widtd:100%">
<tr><br><br>
<center><input  type="submit" value="Log in" style="width: 100px;background-color: #808080; color: white; cursor: pointer;" name="btmsubmit"></center>

</table><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php
$severname='localhost';
$username='root';
$password='';
$dbname='online_market_store';

$con=mysqli_connect($severname,$username,$password,$dbname);
if(isset($_POST["btmsubmit"])){
	
$name=$_POST["name"];
$pass=$_POST["pass"];
$query=mysqli_query($con,"SELECT * FROM supplier_reg WHERE Username='$name' AND Password='$pass'");
if(mysqli_num_rows($query)>0)
{
header("Location:Supplier Profile Page.php");
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

                <li><a href="#"><img src="image/facebook.png" alt="" width="30" height="30"></a></li>
                <li><a href="#"><img src="image/Twitter.png" alt="" width="30" height="30"></a></li>
                <li><a href="#"><img src="image/Whats App.png" alt="" width="30" height="30"></a></li>
                
            </ul>

        </div>
        


    </div>



</div>

    
</footer>







<!--footer section end-->    
</body>

</html>
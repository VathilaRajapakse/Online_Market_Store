<html>


<head>
<link rel="stylesheet" href="stylesAye/final.css">

 <title>Vathi Store</title>
    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="stylesAye/final.css">

</head>

<body class="picthree">

 <header>
        <div class="header-1">
        <img src="imagesAye/vathi.jpg" alt="vathi store" width="85" height="80"/>
        <div class="icons">
            


         </div>
 </form>

        </div>
        <div class="header-2">
		    <!--create navigation bar-->
            <nav class="navbar">
               <a href="home.html">HOME</a>
               <a href="shop.html">SHOP</a>
               <a href="About US.html">ABOUT</a>
               <a href="Contact page.html">CONTACT</a>
               <a href="category.html">CATEGORY</a>


            </nav>
			<!--search box-->
            <form action="" class="search-box-container">
                <input type="search" id="search-box"
                placeholder="search here..">
                <label for="search-box" class="fas fa-search"></label>

            </form>
         


         
        </div>



    </header>

<div class="AA"><center><br>Advertiser Login</center></div>
<br><br><br>

	    <form action="login.php" method="post" >
		 <table id="second" border="0" align="center" style="widtd:100%">
			<tr>
				<td id="right"><label for="user">User name</label></td>
				<td colspan="2"><input type="text" name="Uname"  size="50" required></td>
				<td id="left"><label></label></td>
		
			</tr>
			<tr>
				<td id="right"><label>Password</label></td>
				<td colspan="2"><input type="password" name="Upass" size="50"></td>
				<td></td>
		
			</tr>
        </table>
		
<center><input class="button" type="submit" name="sbutton" value="Login" ></center>
<br>
<center><div>
<font size="2px"><a href="forgotform.html" style="color: white; ">Forgot the Password</font></a><br><br>
<font size="3px">Don't have account? <a href="Advertiserregistration.php">Sign up</font></a>
</div></center><br><br><br><br><br><br><br>

<!--check the login info-->
<?php
/*asign data to variables*/

$severname='localhost';
$username='root';
$password='';
$dbname='online_market_store';


$con=mysqli_connect($severname,$username,$password,$dbname);
if(isset($_POST["sbutton"])){
$name=$_POST["Uname"];
$pass=$_POST["Upass"];

	/*check details*/
    $query=mysqli_query($con,"SELECT * FROM advertiser_reg WHERE User_Name='$name' AND Password='$pass'");
if(mysqli_num_rows($query)>0)
{
    header("Location:userpro.php");/*link next page*/
}
else{
    echo'<script type="text/javascript">alert("invalid user name or password")</script>';
}


}
?>

<div class="back2"></div>
<!--create footer-->

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

                <li><a href="#"><img src="imagesAye/fa.png" alt="" width="30" height="30"></a></li>
                <li><a href="#"><img src="imagesAye/tw.png" alt="" width="30" height="30"></a></li>
                <li><a href="#"><img src="imagesAye/wa.png" alt="" width="30" height="30"></a></li>
                
            </ul>

        </div>









  
               

</body>

</html>
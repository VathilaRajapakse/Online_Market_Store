<html>


<head>
<link rel="stylesheet" href="styles1/USer.css">

 <title>Vathi Store</title>
    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="styles1/Style.css">
	
<style>
body{background-color:#C0C0C0;
background-image: url('images1/UE.png');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;}
  
#submitbtn{
border:1px solid #3498db;
background-color: black;
color:white;
height: 30px;
width: 100px;
border-radius: 5px;
left:0;
margin:0px;
transition: all .3s;	
}
#submitbtn:hover{
	transform: scale(1.1);
	background-color: #566573;
}

</style>

</head>

<body class="picone">

 <header>
        <div class="header-1">
        <img src="images1/Vathi.jpeg" alt="vathi store" width="85" height="80">
        <div>
            <img src="images1/My.png" alt="vathi" width="80" height="80">
            <b>  <a href="User Profile.php" class="btn1">My Account</a></b>
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
				<a href="User Profile.php">MY ACCOUNT</a>
				<a href="FAQ.html">FAQ</a>


            </nav>
            <form action="" class="search-box-container">
                <input type="search" id="search-box"
                placeholder="search here..">
                <label for="search-box" class="fas fa-search"></label>

            </form>
         


         
        </div>



    </header><br><br><br><br><br><br>

<div style="font-size:22px; font-weight:bold;"><center>Edit user page</center></div>
<center>

<div class="Box">

<input type="file" id="file" name="image">
<img src="images1/Eu.jpg" id="img5" width="100%" height="100%">
<label for="file">EDIT PIC</label>

<form>

<input type="text" placeholder="User Name" name="name" required >

<input type="text" placeholder="Password" name="password" required >

<input type="text" placeholder="Re-Enter Password" name="repwd" required >

<input type="text" placeholder="Name" name="namee" required  >

<input type="Email" placeholder="E-Mail" name="email" required >

<input type="number" name="" placeholder="Contact number" name="cnumm" required >

<input type="text" name="" placeholder="Address" name="address" required >


<button style="float: left;margin: 10px 0 0 18.2%;">CANCEL</button>
<center><input style="float: left;margin: 10px 0 0 18.2%;" type="submit" id="submitbtn" value="Update" name="btnsubmit"></center>

</form>

</div>
</center>

<?php
$severname='localhost';
$username='root';
$password='';
$dbname='online_market_store';
$con=mysqli_connect($severname,$username,$password,$dbname);
if($con->connect_error){
    die("Connection failed: " . $con->connect_error);
}
if(isset($_POST['btnsubmit'])){
    $name=$_POST['name'];
   
   
    $query="UPDATE user_reg SET  Password='$_POST[password]',Reenter_password='$_POST[repwd]',Name='$_POST[namee]',Email='$_POST[email]', Contact_Number='$_POST[cnumm]', Address='$_POST[address]' WHERE Username=' $name'";
    $query_run=mysqli_query($con, $query);
    if($query_run){
        echo'<script type="text/javascript">alert("Upadate success")</script>';
    }
    else{
        echo'<script type="text/javascript">alert("error.....")</script>';
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
<!DOCTYPE html>
<html>
<head>
   
    <title>seller login</title>
    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="styles2/styles.css">
</head>
<body class="bod15">

    <!--header section starts -->

    <header>
        <div class="header-1">
        <img src="images/vathii.jpg" alt="vathi store" width="85" height="80"/>

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



    </header>
    <br><br><br><br><br> <br><br><br><br><br>
    <center><h1 id="seller-h1">Seller Login</h1></center>

    <form class="seller-login" action="slogin.php" method="post">
        <br><br><br><br>
        <p class="seller-login-p">First name:</p>
        <input type="text"  class="seller-login-textbox"  name="name" placeholder="Name" ><br><br><br><br><br><br><br><br>

        <p class="seller-login-p">password:</p>
        <input type="password" id="pwd"  class="seller-login-textbox" name="pass" ><br><br><br><br><br><br><br>
        <center><input type="submit" id="submitbtn" value="submit" name="btnsubmit"></center>
       
    </form><br><br><br><br><br><br>
<?php

$severname='localhost';
$username='root';
$password='';
$dbname='online_market_store';



$con=mysqli_connect($severname,$username,$password,$dbname);

if(isset($_POST["btnsubmit"])){
    $name=$_POST["name"];
    $pass=$_POST["pass"];

    $query=mysqli_query($con,"SELECT * FROM seller_reg WHERE Name='$name' AND Password='$pass'");
if(mysqli_num_rows($query)>0)
{
    header("Location:sellerprofile.php");

}
else{
    echo'<script type="text/javascript">alert("invalid name or password")</script>';

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
                        <li><a href="category.html">CATEGORY</a></li>
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
                        <li><a href="Advertiserregistration.php">advertiser registration</a></li>
                        <li><a href="Supplier Registration.html">supplier registration</a></li>
                        <li><a href="seller registation.html">seller registration</a></li>
                        <li><a href="payment.html">PAYMENT OPTION</a></li>
                    </ul>
        
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <ul>
        
                        <li><a href="#"><img src="images/facebook.png" alt="" width="30" height="30"></a></li>
                        <li><a href="#"><img src="images/twitter.png" alt="" width="30" height="30"></a></li>
                        <li><a href="#"><img src="images/ins.png" alt="" width="30" height="30"></a></li>
                        
                    </ul>
        
                </div>
                
        
        
            </div>
        
        
        
        </div>
        
            
        </footer>

        
    
    </body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
    <link rel="stylesheet" href="styles2/styles.css">
</head>
<body class="bod12">
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
        
   </header><br><br><br><br>
    
    <center><h2 id="hh">seller profile</h2></center>

    <form class="seller-login" action="sellerprofile.php" method="post">
        <br><br><br><br>
        <p class="seller-login-p">First name:</p>
        <input type="text"  class="seller-login-textbox"  name="name"><br><br><br><br><br><br><br><br>

        <p class="seller-login-p">password:</p>
        <input type="password" id="pwd"  class="seller-login-textbox" name="pass" ><br><br><br><br><br><br><br>
        <center><input type="submit" id="submitbtn" value="submit" name="btnsubmit"></center>
       
    </form><br><br><br><br><br><br>

    <?php
if(isset($_POST["btnsubmit"])){
$stuName = $_POST["name"];
$password=$_POST["pass"];

$con=mysqli_connect('localhost','root','','online_market_store');

$sql= "SELECT * FROM seller_reg where Name LIKE '%$stuName%' AND Password='$password' ";

if($result=$con->query($sql)){
if($result->num_rows > 0){
echo("<table class='tab' border='1'  align='center' style='width:100%'>");
echo ("<tr>");
echo ("<td colspan='2' bgcolor=#8993be><h1>"."Name"."</h1></td>");
echo ("<td colspan='2' bgcolor=#8993be><h1>"."Phone"."</h1></td>");
echo ("<td colspan='2' bgcolor=#8993be><h1>"."Email"."</h1></td>");
echo ("<td colspan='2' bgcolor=#8993be><h1>"."Address"."</h1></td>");
echo ("<td colspan='2' bgcolor=#8993be><h1>"."dob"."</h1></td>");
echo ("<td colspan='2' bgcolor=#8993be><h1>"."Password"."</h1></td>");
echo ("<td colspan='2' bgcolor=#8993be><h1>"."Re-password"."</h1></td>");

echo ("</tr>");

while($row = $result->fetch_assoc()){
echo ("<tr>");
echo ("<td colspan='2' bgcolor=#232531>><h1><font color=WHITE>". $row['Name']. "</h1></td>");
echo ("<td colspan='2' bgcolor=#232531>><h1><font color=WHITE>" . $row['Phone'] . "</h1></td>");
echo ("<td colspan='2' bgcolor=#232531>><h1><font color=WHITE>" . $row['Email'] . "</h1></td>");
echo ("<td colspan='2' bgcolor=#232531>><h1><font color=WHITE>" . $row['Address'] . "</h1></td>");
echo ("<td colspan='2' bgcolor=#232531>><h1><font color=WHITE>" . $row['dob'] . "</h1></td>");
echo ("<td colspan='2' bgcolor=#232531>><h1><font color=WHITE>" . $row['Password'] . "</h1></td>");
echo ("<td colspan='2' bgcolor=#232531>><h1><font color=WHITE>" . $row['repassword'] . "</h1></td>");
echo ("</tr>");
}
echo("</table>");

}else{
echo "Invalid username or password";
}
}
}
?>
<br><br><br><br>
   
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
        
                        <li><a href="#"><img src="images/face.png" alt="" width="30" height="30"></a></li>
                        <li><a href="#"><img src="images/twi.png" alt="" width="30" height="30"></a></li>
                        <li><a href="#"><img src="images/waht.png" alt="" width="30" height="30"></a></li>
                        
                    </ul>
        
                </div>
                
        
        
            </div>
        
        
        
        </div>
        
            
        </footer>

        
    

</body>
</html>
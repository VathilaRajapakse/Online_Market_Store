<html>


<head>
<link rel="stylesheet" href="final.css">



 <title>Vathi Store</title>
    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="final.css">
	

</head>

<body class="pictwo">


<!--creating header-->
 <header>
        <div class="header-1">
        <img src="imagesAye/vathi.jpg" alt="vathi store" width="85" height="80"/>
          <div class="icons">
            <img  src="imagesAye/ACCC.jpeg" alt="vathi" width="80" height="80">
            <b>  <a href="#" class="btn1">user registration</a></b>


           </div>


        </div>
        <div class="header-2">
		    <!--Creating navigation bar-->
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


<div style="font-size:22px; font-weight:bold;"><center><br>Advertiser Registration</center></div><br>
        <!--creating tables and add data-->
	    <form action="regconfig.php" method="POST" >
		
		 <table id="secondT" border="0" align="center" style="widtd:100%">
			<tr>
				<td id="right"><label for="user">Name</label></td>
				<td colspan="2"><input type="text" name="uname" size="50" placeholder="Name" required></td>
				<td id="left"><label></label></td>
		    </tr>
			<tr>
				<td id="right"><label for="user">User Name</label></td>
				<td colspan="2"><input type="text" name="usname" size="50" placeholder="User Name" required></td>
				<td id="left"><label></label></td>
		    </tr>
			<tr>
				<td id="right"><label>Email</label></td>
				<td colspan="2"><input type="email" name="email" size="50"  placeholder="Enter Your Email" required></td>
				<td id="left"><label>(Should be a valid email address)</label></td>
		
			</tr>
			<tr>
				<td id="right"><label>Contact number</label></td>
				<td colspan="2"><input type="phone" name="mobile" size="50" pattern="[0-9]{10}" placeholder="EX:012-3456789" required></td>
				<td></td>
	                </tr>
			<tr>
				<td id="right"><label>Password</label></td>
				<td colspan="2"><input type="password" id="pwd" name="pss" placeholder="Password" size="50" required></td>
				<td></td>
		
			</tr>
			<tr>
				<td id="right"><label>Re-Enter Password</label></td>
				<td colspan="2"><input type="password" id="repwd" name="rpss" placeholder="Re-Enter Password" size="50" required></td>
				<td></td>
		
			</tr>
			
			
        </table><br>
<!--create submit button-->		
<input class="button" type="submit" name="Submit" value="Register free" onclick="return Validate()"><br><br>

<!--checking password-->
<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("pwd").value;
        var confirmPassword = document.getElementById("repwd").value;
        if (password != confirmPassword) {
            alert("Enter same password twice");
            return false;
        }
        return true;
    }
</script>
</form>

<div class="backimage"></div>
<!--creating footer-->
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
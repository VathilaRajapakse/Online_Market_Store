<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Payment Form</title>
    <link rel="stylesheet" href="stylesAye/payment.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>


<body class="bod">
    <form action="paymentconfig.php" method="POST">
    <div class="container">
        <h1>Confirm Your Payment</h1>
        <div class="first-row">
            <div class="owner">
                <h3>Owner</h3>
                <div class="input-field">
                    <input type="text" name="Owner">
                </div>
            </div>
            <div class="cvv">
                <h3>CVV</h3>
                <div class="input-field">
                    <input type="password" name="pwd">
                </div>
            </div>
        </div>
        <div class="second-row">
            <div class="card-number">
                <h3>Card Number</h3>
                <div class="input-field">
                    <input type="text" name="card">
                </div>
            </div>
        </div>
        <div class="third-row">
            <h3>Month And Year</h3>
            <div class="selection">
                <div class="date">
                    <select name="months" id="mont">
                        <option value="Jan">Jan</option>
                        <option value="Feb">Feb</option>
                        <option value="Mar">Mar</option>
                        <option value="Apr">Apr</option>
                        <option value="May">May</option>
                        <option value="Jun">Jun</option>
                        <option value="Jul">Jul</option>
                        <option value="Aug">Aug</option>
                        <option value="Sep">Sep</option>
                        <option value="Oct">Oct</option>
                        <option value="Nov">Nov</option>
                        <option value="Dec">Dec</option>
                      </select>
                      <select name="years" id="yea">
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                      </select>
					  <div class="second-row">
            <div class="card-number">
                <h3>Value</h3>
                <div class="input-field">
                    <input type="text" name="vl" value="       Rs:2000.00" readonly>
                </div>
            </div>
        </div>
                </div>
                <div class="cards">
                    <img src="imagesAye/paypal.png" width="70" height="50">
                    <img src="imagesAye/master.png" alt="" width="70" height="50">
                    <img src="imagesAye/visa.png" alt="" width="70" height="50">
                </div>
            </div>    
        </div>
        <center><input type="submit" id="submitbtn" value="Confirm" name="submit"></center>
    </div>
    </form>
</body>
</html>
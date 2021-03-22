<?php
include "../../SessionHelper.php";

if (isset($_SESSION["username"])) {


  echo'
<html>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../CSS/CSSbasket/style.css">

<head>
  <div class="topnav" height="50";>
    <input type="text" placeholder="Search">
    <a class="active" href="../../index.php">Home</a>
    <a href="login.php">Login</a>
    <a href="#basket" href="">Checkout</a>
    <a href="products.php">Basket</a>
    
   
</div>
</head>


<body>

<h2>Checkout</h2>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Full Name">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="somebody@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="Name and number of street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Eindhoven">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="EH">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="5612">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <div class="icon-container">

             
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Kosntantin Hadjiyankov">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2024">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <a href="../../index.php"> <input id="buybtn" type="button" value="Buy Now" class="btn"> </a>
      </form>
    </div>
  </div>
  
</div>

</body>
</html>
';
?>
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script> 
$(function(){
    $('#buybtn').click(function(e){
      echo ('Order placed successfully.');
    })
})
</script>

<?php
} else {
  header("location: login.php");
}
?>

<?php  

session_start();

if(!isset($_SESSION['username'])){

  $_SESSION['msg'] = "You must login to view this page";
  header('Location: login.php');
}

if(isset($_GET['logout'])){

  session_destroy();
  unset($_SESSION['username']);
  header("Location: login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Avocado</title>
	<meta charset="utf-8">
<link rel="icon" href="https://www.freelogodesign.org/file/app/client/thumb/5f002f8c-b79c-4e1c-bfff-e692786ef505_200x200.png?1582612092002">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<center><img src="https://www.freelogodesign.org/file/app/client/thumb/5f002f8c-b79c-4e1c-bfff-e692786ef505_200x200.png?1582612092002" heigth="50" width="50"></center>
<style>

body {
  height: 100%;
  width: 100%;
  margin: 0;
  font-family: 'Roboto', sans-serif;
}
 a:link, a:visited {
  background-color:light grey;
  color: grey;
  padding: 14px 25px;
  text-align: center;
  font-size:25;
  text-decoration: none;
  display: inline-block;
  border-color:blue;
}
a:hover, a:active {
  background-color:light grey;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:light grey;
}
li {
  float: right;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 2px 16px;
  text-decoration: none;
}
li a:hover {
  background-color:green;
  color: white;
}
.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 15px;
  display: flex;
}
 
.right-column {
  width: 35%;
  margin-top: 60px;
  margin-left: 125px;
}
/* Product Description */
.product-description {
  border-bottom: 1px solid #E1E8EE;
  margin-bottom: 20px;
}
.product-description span {
  font-size:36px;
  color: #358ED7;
  letter-spacing: 1px;
  text-transform: uppercase;
  text-decoration: none;
}
.product-description h3 {
  font-weight: 300;
  font-size: 25px;
  color: #43484D;
  letter-spacing: -2px;
}
.product-description p {
  font-size: 16px;
  font-weight: 300;
  color: #86939E;
  line-height: 24px;
}
/* Product Price */
.product-price {
  display: flex;
  align-items: center;
}
 
.product-price span {
  font-size: 26px;
  font-weight: 300;
  color: #43474D;
  margin-right: 20px;
}
 
.cart-btn {
  display: inline-block;
  background-color: #7DC855;
  border-radius: 6px;
  font-size: 16px;
  color: #FFFFFF;
  text-decoration: none;
  padding: 12px 30px;
  transition: all .5s;
}
.cart-btn:hover {
  background-color: #64af3d;
}
/* Responsive */
@media (max-width: 940px) {
  .container {
    flex-direction: column;
    margin-top: 60px;
  }
 
  .left-column,
  .right-column {
    width: 100%;
  }
 
  .left-column img {
    width: 300px;
    right: 0;
    top: -65px;
    left: initial;
  }
}
 
@media (max-width: 535px) {
  .left-column img {
    width: 220px;
    top: -85px;
  }
}
.footer-basic {
  padding:40px 0;
  background-color:#ffffff;
  color:#4b4c4d;
}

.footer-basic ul {
  padding:0;
  list-style:none;
  text-align:center;
  font-size:18px;
  line-height:1.6;
  margin-bottom:0;
}

.footer-basic li {
  padding:0 10px;
}

.footer-basic ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.8;
}

.footer-basic ul a:hover {
  opacity:1;
  color: white;
  
}
 ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:light grey;
}
li {
  float: right;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 2px 16px;
  text-decoration: none;
}
li a:hover {
  background-color:green;
}
</style>
</head>
<body>
	<header align="center" style="color:black";><b><h1 style="color:green;font:45">AGRO-CART</h1></b></header>
  <br><ul>
  <b><li><a href="index.php?logout='1'">Logout</a></li>
    <li><a href="login.php">Login</a></li>
    <li><a href="">About</a></li>
  <li><a href="">Contact</a></li>
  <li><a href="">News</a></li>
  <li><a class="active" href="index.php">Home</a></li></b>
</ul><br><br><br>
      <center>
      	
         <div class="container">
 
  <!-- Left Column / Headphones Image -->
  <div>
    <img src="https://sanitasenzaproblemi.it/wp-content/uploads/2020/02/avocado.jpg"style="height: 400px;width: 600px;">
  </div>
 
 
  <!-- Right Column -->
  <div class="right-column">
 
    <!-- Product Description -->
    <div class="product-description">
      <span><b>Avocado</b></span>
      <h3><b>It has Healthy Fat,Fiber</b></h3>
      <p><b><i>An avocado is a bright green fruit with a large pit and dark leathery skin. They're also known as alligator pears or butter fruit. Avocados are a favorite of the produce section. They're the go-to ingredient for guacamole dips.</i></b></p>
    </div>
 
    
    <!-- Product Pricing -->
    <div class="product-price">
    	<p><b>Quantity(KG)</b></p>&ensp;&ensp;
    	<input type="number" name="number">&ensp;&ensp;&ensp;
      <span>Rs.260</span>
      <a href="comingsoon.php" class="cart-btn"style="color: white;background-color: green;">Add to cart</a>
    </div>
  </div>
</div>
</center>

<br><br><div class="footer-basic">
        <footer>
           
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <center><p class="copyright">Agrocart © 2020.All RightsReceived</p></center>
        </footer>
    </div>



</body>
</html>
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
	<title>Home Page</title>
<meta charset="utf-8">
<link rel="icon" href="https://www.freelogodesign.org/file/app/client/thumb/5f002f8c-b79c-4e1c-bfff-e692786ef505_200x200.png?1582612092002">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<center><img src="https://www.freelogodesign.org/file/app/client/thumb/5f002f8c-b79c-4e1c-bfff-e692786ef505_200x200.png?1582612092002" heigth="50" width="50"></center>
<style>
body{
      background-image:url("https://founderindia.com/wp-content/uploads/2019/08/agriculture-startups.jpg");
       background-repeat:no-repeat;
       background-size:cover;
}
a:link, a:visited {
  background-color:light grey;
  color: white;
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
}
.active {
  background-color: #717171;
}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  border-radius: 50%;
}
.open-button:hover{
	background-color: green;
}
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  z-index: 9;
}

.form-container {
  max-width: 300px;
  padding: 10px;
  background-color:light grey;
  background:rgba(0,0,0,0.5);
}

.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background:rgba(0,0,0,0.5);
  resize: none;
  min-height: 200px;
}

.form-container textarea:focus {
  background-color:light grey;
  background:rgba(0,0,0,0.5);
  outline: none;
}

.form-container .btn {
  background-color: blue;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 50%;
  margin-bottom:10px;
  opacity: 0.8;
  border-radius: 100%;
}

.form-container .cancel {
  background-color: green;
}

.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
.mySlides {display: none}
img {vertical-align: middle;}

.slideshow-container {
  max-width: 700px;
  position: relative;
  margin: auto;
}

.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

.active, .dot:hover {
  background-color: #717171;
}

.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 2s;
  animation-name: fade;
  animation-duration: 2s;
}

@-webkit-keyframes fade {
  from {opacity: .10} 
  to {opacity: 10}
}

@keyframes fade {
  from {opacity: .10} 
  to {opacity: 10}
}

@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
.dk input[type="submit"]
{
border:none;
outline:none;
height:50px;
width: 90px;
background:green;
color:white;
font-size:18px;
text-orientation: center;
}
.dk input[type="submit"]
{
cursor:pointer;
background:green;
color:white;
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

</style>
</head>
<body>

	<header align="center" style="color:black";><b><h1 style="color:green;font:45">AGRO-CART</h1></b></header>
	<a href="index.php?logout='1'"></a>
<ul>
  <b><li><a href="index.php?logout='1'">Logout</a></li>
  	<li><a href="login.php">Login</a></li>
  <li><a href="">About</a></li>
  <li><a href="">Contact</a></li>
  <li><a href="">News</a></li>
  <li><a class="active" href="index.php">Home</a></li></b>
</ul><br><br><br>

<div class="slideshow-container">

<div class="mySlides fade">
	<a href="product1.php">
  <img src="https://food.unl.edu/newsletters/images/tomatoes.png" style="width:100%">
  <div class="text"><b>Tomatoes</b></div></a>
</div>

<div class="mySlides fade">
  <a href="product2.php">
  <img src="https://di-uploads-pod6.dealerinspire.com/mercedesbenzofwestchester/uploads/2018/10/Basket_of_apples_12588373.jpg" style="width:100%">
  <div class="text"><b>Apple</b></div></a>
</div>

<div class="mySlides fade">
  <a href="product3.php">
  <img src="https://sanitasenzaproblemi.it/wp-content/uploads/2020/02/avocado.jpg" style="width:100%">
  <div class="text"><b>Avocado</b></div></a>
</div>

</div>
<br><br>

<center>
	<div class="dk">
	<form action="product.php">
	<input type="submit"value="SHOP">
</div>
</form>
</center>



<button class="open-button" onclick="openForm()"><b>CHAT</b></button>

<div class="chat-popup" id="myForm">
  <form action="" class="form-container">
    <h2 style="color: white;">Chat</h2>

    <label for="msg" style="color: white;"><b>With Us</b></label>
    <textarea style="color: white;" placeholder="Type message.." name="msg" required></textarea>

    <center><button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </center>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>
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
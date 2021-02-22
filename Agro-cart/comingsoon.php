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
	<title>coming soon</title>
	<meta charset="utf-8">
<link rel="icon" href="https://www.freelogodesign.org/file/app/client/thumb/5f002f8c-b79c-4e1c-bfff-e692786ef505_200x200.png?1582612092002">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<center><img src="https://www.freelogodesign.org/file/app/client/thumb/5f002f8c-b79c-4e1c-bfff-e692786ef505_200x200.png?1582612092002" heigth="50" width="50"></center>
<script src="https://kit.fontawesome.com/yourcode.js"></script>
<style>
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
.bgimg {
  background-image: url('/w3images/forestbridge.jpg');
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  font-family: "Courier New", Courier, monospace;
  font-size: 25px;
}

.topleft {
  position: absolute;
  top: 0;
  left: 16px;
}

.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}

.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

hr {
  margin: auto;
  width: 40%;
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
	<ul>
  <b><li><a href="index.php?logout='1'">Logout</a></li>
  	<li><a href="login.php">Login</a></li>
  	<li><a href="">About</a></li>
  <li><a href="">Contact</a></li>
  <li><a href="">News</a></li>
  <li><a class="active" href="index.php">Home</a></li></b>
</ul><br><br><br>

	<br><br><br><br><br><br><div class="bgimg">
  <div class="middle">
    <h1 style="color: black;font-weight: bold;">COMING SOON</h1>
    <hr>
    <p id="demo" style="font-size:30px;color: black; font-weight: bold;"></p>
  </div>
</div>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Feb 28, 2021 12:00:00").getTime();

// Update the count down every 1 second
var countdownfunction = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();
  
  // Find the distance between now an the count down date
  var distance = countDownDate - now;
  
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
  
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(countdownfunction);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
<br><br><br><br><br><div class="footer-basic">
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
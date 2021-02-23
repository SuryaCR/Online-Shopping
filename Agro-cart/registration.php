<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
<link rel="icon" href="https://www.freelogodesign.org/file/app/client/thumb/5f002f8c-b79c-4e1c-bfff-e692786ef505_200x200.png?1582612092002">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<center><img src="https://www.freelogodesign.org/file/app/client/thumb/5f002f8c-b79c-4e1c-bfff-e692786ef505_200x200.png?1582612092002" heigth="50" width="50"></center>
<link rel="stylesheet" type="text/css">
<style>
body{
      background-image:url("https://indiaforensic.com/certifications/wp-content/uploads/2017/01/agriculture.jpg");
       background-repeat:no-repeat;
       background-size:cover;
}
.login-box{
width:420px;
height:580px;
background:rgba(0,0,0,0.5);
color:#abc;
top:63%;
left:50%;
position:absolute;
transform: translate(-50%,-50%);
box-sizing:border-box;
}
.login-box input
{
width:75%;
margin-bottom:20 px;
}
.login-box input[type="text"],input[type="password"]
{
border:none;
border-bottom:1 px solid #fff;
background:transparent;
outline:none;
height:40px;
color:#fff;
font-size:16px;
}
.login-box input[type="submit"]
{
border:none;
outline:none;
height:40px;
background:#1c8adb;
color:#fff;
font-size:18px;
border-radius:20px;
}
.login-box input[type="submit"]
{
cursor:pointer;
background:#39dc7;
color:#000;
}
h3{
margin:0;
padding:0 0 20px;
text-align:center;
font-size:22 px;
}
.login-box p{
margin:0;
padding:0;
font-weight:bold;
}
.a
{
width:100px;
height:100px;
border-radius:15%;
position:absolute;
top:-50px;
left:calc(50% - 50px);
}
.login-box a{
text-decoration:none;
font-size:14px;
color:#fff;
}
.login-box a:hover
{ color:#39dc79;
}
.c{
	color: white;
}
.fa {
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 70%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}
</style>
</head>
<meta charset="utf-8">
<body>
    <header align="center" style="color:black";><b><h1 style="color:green;font:45">AGRO-CART</h1></b></header>
	<div class="login-box">
		<center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRoxJNwpO9xqIL6sGX9b_gK0ne-nNFFXYz9t9dPGKtD_McId-6Y" height="90" width="90"alt="Avatar"style="border-radius:50%"></center>
        <center><b><h3>SignUp</h3></b></center>
		<center><form action="registration.php" method="post">

			<?php include('errors.php') ?>	
			<div>
				<p>Username</p>
				<input type="text" name="username" placeholder="Enter Username" required>
			</div>

			<div>
				<p>Email</p>
				<input type="text" name="email" placeholder="Enter E-mail Id"required>
			</div>

			<div>
				<p>Password</p>
				<input type="password" name="password_1" placeholder="Enter Password"required>
			</div>

			<div>
				<p>Confirm Password</p>
				<input type="password" name="password_2" placeholder="Confirm Password"required>
			</div>
			<br><input type="submit" name="reg_user" value="CREATE">

			<br><p class="c">Already a User?&ensp;&ensp;<a href="login.php"><b>LOG IN</b></a></p>
			<br><p class="c"><b>Or Create Using</b></p>

			<br><a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
</form></center>
</div>

</body>
</html>

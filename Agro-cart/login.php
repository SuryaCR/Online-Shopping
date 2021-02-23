<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
<meta charset="utf-8">
<link rel="icon" href="https://www.freelogodesign.org/file/app/client/thumb/5f002f8c-b79c-4e1c-bfff-e692786ef505_200x200.png?1582612092002">
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
height:420px;
background:rgba(0,0,0,0.5);
color:#abc;
top:50%;
left:50%;
position:absolute;
transform: translate(-50%,-50%);
box-sizing:border-box;
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
.login-box a{
text-decoration:none;
font-size:14px;
color:#fff;
}
.login-box a:hover
{ 
	color:#39dc79;
}
</style>
</head>
<body>
	<header align="center" style="color:black";><b><h1 style="color:green;font:45">AGRO-CART</h1></b></header>
<?php include('errors.php') ?>	
	<br><br><br><div class="login-box">
		<center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRoxJNwpO9xqIL6sGX9b_gK0ne-nNFFXYz9t9dPGKtD_McId-6Y" height="90" width="90"alt="Avatar"style="border-radius:50%">
        <h3>Login Here</h3></center>
		<center><form action="login.php" method="post">
			<div>
				<p>Username</p>
				<input type="text" name="username" placeholder="Enter Username" required>
			</div>

			<div>
				<p>Password</p>
				<input type="password" name="password_1" placeholder="Enter Password" required>
			</div>

			<br><input type="submit" name="login_user" value="LOG IN">

			<br><br><p class="c">Not a User?&ensp;&ensp;<a href="registration.php"><b>REGISTER HERE</b></a></p>

			</form></center>
		</div>

</body>
</html>

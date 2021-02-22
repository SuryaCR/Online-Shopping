<?php  


session_start();

$username = "";
$email = "";
$errors = array();

$db = mysqli_connect('localhost','root','','practice') or die("could not connect");

if(isset($_POST['reg_user']))
{

$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$password_2= mysqli_real_escape_string($db, $_POST['password_2']);

if(empty($username)){array_push($errors, "Username is Required"); }
if(empty($email)){array_push($errors, "Email is Required"); }
if(empty($password_1)){array_push($errors, "Password is Required"); }
if($password_1 != $password_2){array_push($errors, "Password not match"); }

$user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1";

$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

if($user){
	if($user['username'] === $username)
		{
			array_push($errors, "Username exists");
		}
	if($user['email'] === $email)
		{
			array_push($errors, "Email is register with other username");
		}
}

if(count($errors) == 0){
	$password = md5($password_1);
	print $password;
	$query = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";

	mysqli_query($db, $query);
	$_SESSION['username'] = $username;
	$_SESSION['success'] = "You are logged in";

	header('Location:index.php');
 }
}

if(isset($_POST['login_user'])){

	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password_1']);

	if(empty($username)){array_push($errors, "Username is Required"); }
	if(empty($password)){array_push($errors, "Password is Required"); }

	if(count($errors) == 0){
	$password = md5($password);
	$query = "SELECT * FROM user WHERE username='$username' AND password='$password' ";

	$results = mysqli_query($db, $query);

	if(mysqli_num_rows($results)){

		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You have successfully Logged In";
		header('Location:index.php');
	}
	else{
		array_push($errors, "Wrong Username/Password Combination.Try again.");
	}
}
}

?>
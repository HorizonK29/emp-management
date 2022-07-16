<?php
session_start();


?>

<!DOCTYPE html>
<html>

<head>
	<title> Login Form </title>
	<link rel="stylesheet" a href="css\style.css">
	<link rel="stylesheet" a href="css\font-awesome.min.css">
</head>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: "Poppins", sans-serif;
	}

	body {
		margin: 0 auto;
		background-color: cadetblue;
		background-repeat: no-repeat;
		background-size: 100% 720px;
	}

	label {
		width: 500px;
		height: 450px;
		text-align: center;
		margin-block: inherit;
		margin-top: 20%;
	}

	.container {
		width: 500px;
		height: 450px;
		text-align: center;
		margin: 0 auto;
		background-color: rgba(44, 62, 80, 0.7);
		margin-top: 90px;
		border-block: border-box;
		border-radius: 5px;
	}

	h2 {
		margin-top: 3px;
	}

	input[type="text"],
	input[type="password"] {
		margin-top: 30px;
		height: 45px;
		width: 300px;
		font-size: 18px;
		margin-bottom: 20px;
		background-color: #fff;
		padding-left: 40px;
	}

	.form-input::before {

		font-family: "FontAwesome";
		padding-left: 07px;
		padding-top: 40px;
		position: absolute;
		font-size: 35px;
		color: #2980b9;
	}


	.btn-login {
		padding: 15px 25px;
		border: black 2px solid;
		background-color: green;
		border-radius: 3px;
		color: #fff;
	}
	.forget-password,.newUser{

	color: blanchedalmond;
	
	}
	.copyright{
align-content: center;


	}
</style>

<body>
	<label for="" id="heading">
		<h1><b>Welcome to Employee Management </b></h1>
	</label>
	<div class="container">
		<form action="#" method="POST" autocomplete="off">
			<h2> <b>Login Page</b></h2>
			<div class="form-input">
				<input type="text" name="username" placeholder="Enter the User Name" />
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password" />
			</div>
			<div class="forget-password"> <a href="#">Forget Password?</a> </div>
			<div class="login"> 
				<input type="submit" name="login" type="submit" value="login" class="btn-login" />
			</div>
			<div class="newUser">
				<a href="#">New User? Sign Up</a>
				
			</div>
<br><br><br>
			<div class="copyright" style="align-items:center ;">This project is made by &copy; Kshitija Kamble</div>
	</div>
	

	</form>

</body>


</html>
<?php 
include("connection.php");
if (isset($_POST['login'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM form WHERE username='$username' && password='$password'";

	$result = mysqli_query($conn, $query);
 $total=mysqli_num_rows($result);
	if ($total == 1) {
	
		//echo " You Have Successfully Logged in";
	 $_SESSION['user_name']=$username;
	
		header('location:display.php');

	} else {
		echo "<script> alert(' You Have Entered Incorrect Password')</script>";
		
	}
}

?>
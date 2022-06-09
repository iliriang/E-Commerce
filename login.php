 <?php
include 'resources\dbResources.php';
    include "config.php";

session_start();

error_reporting(0);

// if (isset($_SESSION['username'])) {
//     header("Location: view.php");
// }
if(isset($_SESSION['Emailadmin'])){
	header('location: view.php');
}


if (isset($_POST['submit'])) {
	// die;
	$email = $_POST['email'];
	// $password = md5($_POST['password']);
	$password = ($_POST['password']);
	
	$sql = "SELECT * FROM userss WHERE email ='$email' AND password = '$password'";
	// $sql = "SELECT * FROM userss WHERE email = 'admin@gmail.com' AND password = 'admin'";
	$result = mysqli_query($conn, $sql);
	$num_rows = $result->num_rows;
	if($num_rows > 0){
		$row = mysqli_fetch_assoc($result);
		if(($email == $row['email']) && ($password == $row['password'])){
			$_SESSION['Emailadmin'] = $row['email'];
			$_SESSION['isAdmin'] = $row['isAdmin'];


			header("Location: view.php");
		}else{
			echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
		}
		// $_SESSION['username'] = $row['username'];

		// header("Location: view.php");
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="assets/style1.css">

	<title>Login - OmiO</title>
</head>
<body>
    <?php include 'header.php';?>

	<div class="container">
		<form name="myForm" action="" method="POST" class="login-email" onsubmit="return validateLogin()">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" >
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" >
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
          

		</form>
	</div>

</body>
</html>
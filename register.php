 <?php
    include "config.php";
    $result = null;
    $sql = "";
    if(isset($_POST['data_submitted'])){
            

        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "INSERT INTO userss (firstname, lastname, email,password) VALUES ('".$first_name."', '".$last_name."', '".$email."','".$password."')";
		if($sql){
			header('Location: view.php');
		}

    
    if ($conn->query($sql) === TRUE) {
    
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    }



if($result == TRUE){
    echo "New record created succesfully ";
}
else{


}

$conn->close();


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="assets/style1.css">

	<title>Register - OmiO</title>
</head>
<body>
<?php include 'header.php';?>
	<div class="container">
		<form action="register.php" method="POST" class="login-email">
            <input type="hidden" name="data_submitted" value="true" >
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="firstname" name="firstname" required>
			</div>
            	<div class="input-group">
				<input type="text" placeholder="lastname" name="lastname"  required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email"  required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password"  required>
            </div>
              
			<div class="input-group">
				<button type="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>

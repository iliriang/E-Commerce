<?php 
include "config.php";
    $result = null;
    $sql = "";
    $firstname = "";
    $lastname = "";
    $email = "" ;
    $password = "" ;
    
    if(isset($_POST['update'])){
        $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user_id = $_POST['user_id'];

    $sql = "UPDATE `userss` SET `firstname` = '$firstname' , `lastname` = '$lastname', `email` = '$email',`password` = '$password' WHERE `id` = '$user_id' ";
    $result = $conn->query($sql);
    if($result == TRUE) {
        header('Location: view.php');
     }
    else {
        echo "Error:". $sql .  "<br>" . $conn->error;
        }
}
    if(isset($_GET['id'])){
        $user_id = $_GET['id'];
        $sql = " SELECT * FROM userss WHERE id = '$user_id' ";
        $result = mysqli_query($conn, $sql);
        $num_rows = $result->num_rows;
        if($num_rows > 0){
            while($row = $result->fetch_assoc()) {
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];
                $email = $row['email'];
                $password = $row['password'];
                $id = $row['id'];
                
?> 
            
           <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="assets/style1.css">

	<title>UPDATE - OmiO</title>
</head>
<body>
    <title>UPDATE</title>
            <h2>User Update Form</h2>
            <form action="update.php" method="POST">
<fieldset>
<legend>Personal information:</legend>
First name: <br>
<input type="text" name="firstname" value="<?php echo $firstname; ?>">
<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
<br>
Last name:<br>
<input type="text" name="lastname" value="<?php echo $lastname ?>">
<br>
Email:<br>
<input type="email" name="email" value="<?php echo $email; ?>">
<br>
Password: <br>
<input type="password" name="password" value="<?php echo  $password; ?>">
<br>
<input type="submit" value="Update" name="update">
        </fieldset>

            
            </form>
        </body>
        </html>

        <?php 


        }
    } 
}
    



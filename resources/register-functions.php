<?php

include("..\resources\functions.php");

if (isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirm']) ) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    

    create_data(
        $db,
        "users",
        ['username' , 'email','password', 'confirm' ],
        [$username,$email, hash('md5', $password),hash('md5', $confirm)]
    );
}
?>
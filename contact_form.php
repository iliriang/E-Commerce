<?php
include "config.php";




if(isset($_POST["submit_form"])){
    
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $message = $_POST['message'];

    $sql="insert into `contact_form` (firstName,lastName,message) values ('$firstName',' $lastName',' $message')";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:index.php');
    }
    else{
        die(mysqli_error($conn));
    }
    
}
?>
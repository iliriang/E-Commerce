<?php

include 'config.php';
if(isset($_POST["submit_product"])){
    $title=$_POST['title'];
    $second_title=$_POST['second_title'];
    $product_price=$_POST['product_price'];

    if($title== '' || $second_title == '' || $product_price == ''){
        echo "<script> alert('All fields are requared!');</script>";
    }
    else{
        $sql="insert into `new_collection_data` (title,second_title,product_price) values ('$title',' $second_title',' $product_price')";
        $result=mysqli_query($conn,$sql);
        if($result){
           header('location:view.php');
        }
        else{
            die(mysqli_error($conn));
        }
    }
}

   

 
?>









<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>productview</title>
  </head>
  <body>
<div class="container">
<form method='post' class="mb-3">
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" placeholder="Enter product Title" name="title" >
  </div>
  <div class="form-group">
    <label>Second Title</label>
    <input type="text" class="form-control" placeholder="Enter product second title" name="second_title">
  </div>
  <div class="form-group">
    <label>Product price</label>
    <input type="text" class="form-control" placeholder="Enter product price" name="product_price">
  </div>
  <button type="submit" class="btn btn-primary my-5" name="submit_product">Submit</button>

</form>
</div>

  </body>
</html>
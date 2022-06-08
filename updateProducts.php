<?php

include 'config.php';
if(isset($_GET['updateid'])){
    $id=$_GET['updateid'];
}
$sql="Select * from `new_collection_data` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$title=$row['title'];
$second_title=$row['second_title'];
$product_price=$row['product_price'];


if(isset($_POST["submit_product"])){
    $title=$_POST['title'];
    $second_title=$_POST['second_title'];
    $product_price=$_POST['product_price'];
    $sql="update `new_collection_data` set id='$id', title='$title', second_title='$second_title', product_price='$product_price' where id=$id";
    $result=mysqli_query($conn,$sql);
    header('location:view.php');
}
else{
        if($result){
        //    header('location:updateProducts.php');
        }
        else{
            die(mysqli_error($conn));
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
    <input type="text" class="form-control" placeholder="Enter product Title" name="title" value=<?php echo $title;?>>
  </div>
  <div class="form-group">
    <label>Second Title</label>
    <input type="text" class="form-control" placeholder="Enter product second title" name="second_title" value=<?php echo $second_title;?>>
  </div>
  <div class="form-group">
    <label>Product price</label>
    <input type="text" class="form-control" placeholder="Enter product price" name="product_price" value=<?php echo $product_price;?>>
  </div>
  <button type="submit" class="btn btn-primary my-5" name="submit_product">Update</button>

</form>
</div>

  </body>
</html>
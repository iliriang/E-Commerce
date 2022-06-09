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
$images=$row['images'];



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

  <div class="form-group" style='padding:8px'>
    <label>Title</label>
    <input type="text" class="form-control" placeholder="Enter product Title" name="title" value=<?php echo $title;?>>
  </div>
  <div class="form-group" style='padding:8px'>
    <label>Second Title</label>
    <input type="text" class="form-control" placeholder="Enter product second title" name="second_title" value=<?php echo $second_title;?>>
  </div>
  <div class="form-group" style='padding:8px'>
    <label>Product price</label>
    <input type="text" class="form-control" placeholder="Enter product price" name="product_price" value=<?php echo $product_price;?>>
  </div>
  <div class="form-group" style='padding:8px'>
    <input type="file" name="image">
  </div>
  <div class="form-group" style='padding:8px'>
  <img src="assets/img/<?php  echo $images; ?>" style="width:50px ; height:50px">
  </div>
  <button type="submit" class="btn btn-primary my-3" name="submit_product">Update</button>

</form>
</div>

  </body>
</html>
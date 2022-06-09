<?php

include 'config.php';
if(isset($_POST["submit_product"])){
    $title=$_POST['title'];
    $second_title=$_POST['second_title'];
    $product_price=$_POST['product_price'];
    $images= "collection-".$_FILES['image']['name'];
    $target="assets/img/".basename($images);

    if($title== '' || $second_title == '' || $product_price == ''){
        echo "<script> alert('All fields are requared!');</script>";
    }
    else{
        $sql="insert into `new_collection_data` (title,second_title,product_price,images) values ('$title',' $second_title',' $product_price','$images')";
        $result=mysqli_query($conn,$sql);
        if($result){
           header('location:view.php');
        }
        else{
            die(mysqli_error($conn));
        }
    }

    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
      $msg="image uploded succescfully";
    }else{
      $msg="there was a problem uploading";
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

<?php 
//  $conn= mysqli_connect("localhost", "root", "","omi");
//  $sql= "select * from `new_collection_data` ";
//  $result=mysqli_query($conn,$sql);
//  while($row = mysqli_fetch_array($result)){
//    echo "<div id='img_div'";
//    echo "<img src='".$row[images]."'>";
//    echo"</div>";
//  }

?>
<form method='post' class="mb-3" enctype=multipart/form-data>
 
  <div class="form-group" style='padding:10px'>
    <label>Title</label>
    <input type="text" class="form-control" placeholder="Enter product Title" name="title" >
  </div>
  <div class="form-group" style='padding:10px'>
    <label>Second Title</label>
    <input type="text" class="form-control" placeholder="Enter product second title" name="second_title">
  </div>
  <div class="form-group" style='padding:10px'>
    <label>Product price</label>
    <input type="text" class="form-control" placeholder="Enter product price" name="product_price">
  </div>
  <div class="form-group" id='img_div' style='padding:10px'>
    <input type="file" name="image">
  </div>

 

  <button type="submit" class="btn btn-primary my-3" name="submit_product">Submit</button>

</form>
</div>

  </body>
</html>
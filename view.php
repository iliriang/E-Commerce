<?php
    include "config.php";
    session_start();
    if(isset($_SESSION['Emailadmin'])){
        $useremail = $_SESSION['Emailadmin'];
    }else{
        header('location: login.php');
    }

    $sql = "SELECT * FROM userss";

    $result = $conn->query($sql);
    include 'resources\dbResources.php';
    ?>

    <!DOCTYPE html>
    <html>
        <head>
            <title>View Page</title>
            <link rel="stylesheet" href="assets/style.css" />
         <head>

 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
   

        </head>
        <body>
            <div class="admin-header">
                <h2>Welcome, <?= $useremail; ?></h2>
                <a href=logout.php?logout>Logout</a>
            </div>


            <div class="container">
                <h2>users</h2>
                <table class="table">
                    <head>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
</thread>
<tbody>

    <?php 
    if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        ?>

             <tr>
<td><?php echo $row['id']; ?> </td>
<td><?php echo $row['firstname']; ?> </td>
<td><?php echo $row['lastname']; ?> </td>
<td><?php echo $row[ 'email']; ?> </td>
<td><?php echo $row['password']; ?> </td>
<td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">
Edit</a>&nbsp; <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">
Delete</a></td>
    </tr>

    <?php }
}

?>                    
                </tbody>
</table>



<div class="container">
    <button class="btn btn-primary my-5"><a href="productview.php" class="text-light">Add Product</a></button>
</div>
<h2>Products new Collection</h2>
    <table class="table">
        <head>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Second Title</th>
                <th>Product Price</th>
                <th>Action</th>
            </tr>
        </thread>
        <tbody>
            <?php
            foreach($new_collection_data as $data){ ?>
                <tr>
                    <td><?php  echo $data['id']; ?> </td>
                    <td><?php  echo $data['title']; ?>
                    </td>
                    <td><?php  echo $data['second_title']; ?>
                    </td>
                    <td><?php  echo $data['product_price']; ?> </td>
                    <td><a class="btn btn-info" href="updateProducts.php?updateid=<?php echo $data['id']; ?>">
                    Edit</a>&nbsp; <a class="btn btn-danger" href="delete.php?id=<?php echo $data['id']; ?>">
                    Delete</a></td>
                </tr>      
            <?php } ?>
        </tbody>
    </table>
</div>

        </body>
    </html>
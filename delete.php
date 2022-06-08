<?php
    include "config.php";
    if(isset($_GET['id'])) {
        $user_id = $_GET['id'];

        $sql = "DELETE FROM `userss` WHERE `id`='$user_id'";
        $result = $conn->query($sql);
        if($result == TRUE){
            header('Location: view.php');
        }else {
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    }


    if(isset($_GET['id'])) {
        $new_collection_data = $_GET['id'];

        $sql = "DELETE FROM `new_collection_data` WHERE `id`='$new_collection_data'";
        $result = $conn->query($sql);
        if($result == TRUE){
            header('Location: view.php');
        }else {
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    }

    




     
    ?>
<?php
include 'connection.php';
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql = "delete from `crud` where id=$id";
    $result = mysqli_query($conn,$sql);
    if($result){
        header('location:display.php');
    }
}


?>
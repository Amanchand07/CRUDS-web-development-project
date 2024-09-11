<?php

include 'connection.php';
$id = $_GET['update'];
$sql = "select * from `crud` where id=$id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
if(isset($_POST['submit'])){
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Mobile = $_POST['Mobile'];

    $sql = "update `crud` set id=$id,name='$Name',email='$Email',mobile='$Mobile' where id=$id";
    $result = mysqli_query($conn,$sql);
    if($result)header('location:display.php') ;
    else die(mysqli_error($conn));

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/update.css">
    <title>UPDATE</title>
</head>
<body>
    <div>
        <form method="post">
            <label for="Name">Name</label>
            <input type="text" name="Name" id="Name" placeholder="Enter Your Name" value=<?php echo $name?>>
            <br>
            <label for="Name">Email</label>
            <input type="text" name="Email" id="Email" placeholder="Enter Your Email" value=<?php echo $email?>>
            <br>
            <label for="Name">Mobile</label>
            <input type="text" name="Mobile" id="Mobile" placeholder="Enter Your Mobile No." value=<?php echo $mobile?>>
            <br>
            <button type="submit" name="submit">SUBMIT</button>
        </form>
    </div>
</body>
</html>
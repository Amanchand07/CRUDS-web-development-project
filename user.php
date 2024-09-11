<?php

include 'connection.php';
if(isset($_POST['submit'])){
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Mobile = $_POST['Mobile'];

    $sql = "insert into `crud` (Name,Email,Mobile) values('$Name','$Email','$Mobile')";
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
    <link rel="stylesheet" href="css/user.css">
    <title>USER ADD</title>
</head>
<body>
    <div>
        <form method="post">
            <label for="Name">Name</label>
            <input type="text" name="Name" id="Name" placeholder="Enter Your Name">
            <br>
            <label for="Name">Email</label>
            <input type="text" name="Email" id="Email" placeholder="Enter Your Email">
            <br>
            <label for="Name">Mobile</label>
            <input type="text" name="Mobile" id="Mobile" placeholder="Enter Your Mobile No.">
            <br>
            <button type="submit" name="submit">SUBMIT</button>
        </form>
    </div>
</body>
</html>
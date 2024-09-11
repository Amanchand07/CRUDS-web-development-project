<?php

include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/display.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <title>Display</title>
</head>
<body>
    <div class="container">
    <h1><a href="/display.php">HOME</a></h1>
    <button class="btn-add"><a href="/user.php" >Add User</a></button>
        <table class="tablee">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Operation</th>
            </tr>
            <?php

            $sql = "Select * from `crud`";
            $result = mysqli_query($conn,$sql);
            if($result){
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['id'];
                    $name = $row['name'];
                    $email = $row['email'];
                    $mobile = $row['mobile'];
                    echo '
                    <tr>
                <td>'.$name.'</td>
                <td>'.$email.'</td>
                <td>'.$mobile.'</td>
                <td>
            <button class="updel"><a href="update.php?update='.$id.'">UPDATE</a></button>
            <button class="updel"><a href="delete.php?delete='.$id.'">DELETE</a></button>
            </td>
            </tr>
                    ';
                }
                
            }

            ?>
            
        </table>
    </div>
</body>
</html>
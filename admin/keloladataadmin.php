<?php 
include "../module/koneksi.php";

if (isset($_GET['username'])){
    $SQL="UPDATE user SET `username`='$_GET[username]', `password`='$_GET[password]' WHERE `role`='admin'";
    mysqli_query($conn, $SQL);
}

$result=mysqli_query($conn, "SELECT * FROM user WHERE `role`='admin'");
$data=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Kelola Data Admin</title>
</head>
<body>
    <style>
    body{
        display: grid;
        background-color: #212121;
        color: #f6f1f1;
        grid-template-rows: auto auto;
        padding: 70px;
        row-gap: 50px;
        
    }

    table{
        background: #f6f1f1;
        color: black;
    }

    td{
        padding-block: 5px;
    }

    a{
        color: white;
    }
    </style>
    <form action="">
        <label for="username">username</label>
        <input type="text" name="username" value="<?= $data['username']?>">
        <label for="password">password</label>
        <input type="text" name="password" value="<?= $data['password']?>">
        <input type="submit" value="submit">
    </form>
</body>
</html>
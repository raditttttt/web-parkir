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
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            background: black;
            color: white;
        }

        .login-container {
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 200px;
            padding: 10px;
            margin: 5px;
        }

        .login-container button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #FFFFFF;
            border-radius: 4px;
            border: none;
            cursor: pointer;
        }
    </style>
    <form action="">
        <h2>
            Edit Akun Admin
        </h2>
        <label for="username" style="display: block; margin-right: 10px"></label>username</label>
        <input type="text" name="username" style="padding: 5px; margin-top: 5px; display: block; margin-right: 50px; background: #f6f1f1; border: none" value="<?= $data['username']?>">
        <label for="password" style="display: block; margin-top: 20px; margin-right: 10px"></label>password</label>
        <input type="text" name="password" style="padding: 5px; margin-top: 5px; display: block; margin-right: 50px; background: #f6f1f1; border: none" value="<?= $data['password']?>">
        <input type="submit" style="padding: 6px; margin-top: 30px; background: #f6f1f1; border: none" value="submit">
    </form>
    <a href="index.php">kembali...</a>
</body>
</html>
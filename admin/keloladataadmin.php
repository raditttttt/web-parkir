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
<style>
    body{
        display: grid;
        background-color: #212121;
        color: #f6f1f1;
        grid-template-rows: auto auto;
        font-family: 'Trebuchet MS';
        font-weight: bold;
    }

    form{
        margin: auto;
    }

    button{
        height: 30px;
        width: 60px;
        color: black;
        background: #f6f1f1;
        border: none;
        align: right;
        margin-top: 20px;
        margin-left: 20px;
        margin-bottom: 50px;
    }
</style>
<body>
    <button onclick=window.location.href='index.php'> Kembali </button>
    <div style="margin: auto">
        <h2 style="text-align: center">Edit Akun Admin</h2>
        <form action="">
            <label for="username" style="display: block"></label>Username</label>
            <input required type="text" name="username" style="padding: 5px; margin-top: 5px; display: block; background: #f6f1f1; border: none" value="<?= $data['username']?>">
            <label for="password" style="display: block; margin-top: 10px"></label>Password</label>
            <input required type="text" name="password" style="padding: 5px; margin-top: 5px; display: block; background: #f6f1f1; border: none" value="<?= $data['password']?>">
            <input type="submit" style="display: block; padding: 6px; margin-top: 20px; background: #f6f1f1; border: none" value="Update">
        </form>
    </div>
</body>
</html>
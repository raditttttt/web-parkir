<?php
include "../module/koneksi.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Akun</title>
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
    <button onclick="window.location.href= '../user/index.php'">Kembali</button>
    <div style="margin: auto">
        <h2 style="text-align: center">Edit Akun</h2>
        <form action="../module/edituser.php" method="post">
            <label for="username" style="display: block">Username</label>
            <input required value="<?= $_SESSION['username'] ?>" type="text" name="username" style="margin-top: 5px; padding: 5px; background: #f6f1f1; border: none">
            <label for="password" style="margin-top: 10px; display: block">Password</label>
            <input required value="<?= $_SESSION['password'] ?>" type="text" name="password" style="margin-top: 5px; padding: 5px; display: block; background: #f6f1f1; border: none">
            <input type="submit" value="Update" style="margin-top: 20px; padding: 6px; background: #f6f1f1; border: none; display: block">
        </form>
    </div>
</body>
</html>

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
        padding: 70px;
    }
    input{
        font-size: 1.5 em;
    }
</style>
<body>
    <form action="../module/edituser.php" method="post">
        <h2>
            Edit Akun
        </h2>
        <label for="username" style="display: block; margin-right: 10px">Username</label>
        <input value="<?= $_SESSION['username'] ?>" type="text" name="username" style="padding: 5px; margin-top: 5px; margin-right: 50px; background: #f6f1f1; border: none">
        <label for="password" style="display: block; margin-top: 20px; margin-right: 10px">Password</label>
        <input value="<?= $_SESSION['password'] ?>" type="text" name="password" style="padding: 5px; margin-top: 5px; display: block; margin-right: 50px; background: #f6f1f1; border: none">
        <input type="submit" value="Update" style="padding: 6px; margin-top: 30px; background: #f6f1f1; border: none">
    </form>
</body>
</html>
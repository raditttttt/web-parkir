<?php
include "../module/koneksi.php";
if (isset($_GET['username'])){
    $SQL="insert into user values (0, '$_GET[username]', '$_GET[password]', 'user')";
    mysqli_query($conn, $SQL);
}

$SQL = "SELECT * FROM user WHERE NOT `role`='admin'";
$result= mysqli_query($conn, $SQL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Data User</title>
</head>
<style>
    body{
        display: grid;
        background-color: #212121;
        color: #f6f1f1;
        grid-template-rows: auto auto;
        padding: 70px;
        row-gap: 50px;
        font-family:'trebuchet MS';
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
<body>
    <form action="">
        <h2>
            Tambah User
        </h2>
        <label for="username" style="margin-right: 10px">Username</label>
        <input type="text" name="username" style="padding: 5px; margin-right: 50px; background: #f6f1f1; border: none">
        <label for="password" style="margin-right: 10px">Password</label>
        <input type="text" name="password" style="padding: 5px; margin-right: 50px; background: #f6f1f1; border: none">
        <input type="submit" value="submit" style="padding: 6px; background: #f6f1f1; border: none">
    </form>
    <table border='1' style="text-align: center">
        <tr>
            <td>Username</td>
            <td>Password</td>
            <td colspan="2">Action</td>
        </tr>
        <?php while ($data=mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?= $data["username"] ?></td>
            <td><?= $data["password"] ?></td>
            <td onclick="window.location.href='./edit.php'">edit</td>
            <td onclick="window.location.href='/'">hapus</td>
        </tr>
        <?php endwhile; ?>
    </table>
    <a href="index.php">kembali...</a>
</body>
</html>
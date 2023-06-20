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
        padding-inline: 70px;
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
    
    button{
        background: white;
        border: none;
        width: 60px;
        height: 30px;
        margin-top: 25px;
    }
</style>
<body>
<button onclick="window.location.href='index.php'"> Kembali </button>
    <div style="margin: auto">
        <h2 style="text-align: center">Tambah User</h2>
        <form action="">
            <label for="username" style="display: block">Username</label>
            <input required type="text" name="username" style="margin-top: 5px; padding: 5px; background: #f6f1f1; border: none">
            <label for="password" style="margin-top: 10px; display: block">Password</label>
            <input required type="text" name="password" style="margin-top: 5px; display: block; padding: 5px; background: #f6f1f1; border: none">
            <input type="submit" value="submit" style="margin-top: 20px; display: block; padding: 6px; background: #f6f1f1; border: none">
        </form>
    </div>
    <h2 style="text-align: center">Daftar User</h2>
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
            <td> <a href='edit.php?id=<?= $data["id"] ?>'>Edit</a></td>
            <td> <a href='hapusdata.php?id=<?= $data["id"] ?>'>Hapus</a></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
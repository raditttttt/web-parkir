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
<body>
    <form action="">
        <h2>
            Tambah User
        </h2>
        <label for="username">username</label>
        <input type="text" name="username">
        <label for="password">password</label>
        <input type="text" name="password">
        <input type="submit" value="submit">
    </form>
    <br>
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
            <td onclick="window.location.href='/'">edit</td>
            <td onclick="window.location.href='/'">hapus</td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
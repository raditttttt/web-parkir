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
    <title>Kelola Plat Nomor</title>
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
<button onclick=window.location.href='index.php'> Kembali </button>
    <h2 style="text-align: center">Daftar User</h2>
    <table border='1' style="text-align: center">
        <tr>
            <td>id</td>
            <td>Username</td>
            <td>Action</td>
        </tr>
        <?php while ($data=mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?= $data["id"] ?></td>
            <td><?= $data["username"] ?></td>
            <td> <a href='platnomoruser.php?id_pemilik=<?= $data['id'] ?>'>Lihat</a></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
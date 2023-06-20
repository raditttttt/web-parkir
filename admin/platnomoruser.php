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
    
    th{
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
    <button onclick=window.location.href='kelolaplatnomor.php'> Kembali </button>
    <div style="margin: auto">
        <h2 style="text-align: center">Tambah Plat Nomor</h2>
        <form action="tambah.php" method="post">
            <?php
                include "../module/koneksi.php";
                $query = "SELECT * FROM user WHERE id=$_GET[id_pemilik]";
                $result = mysqli_query($conn, $query);
                $data_user = mysqli_fetch_array($result);
            ?>
            <h1 style="text-align: center"><?= $data_user['username'] ?></h1>
            <input type="hidden" name="id_pemilik" value="<?= $data_user['id'] ?>">
            <input style="padding: 5px" type="text" name="nomor" placeholder="Plat Nomor" required>
            <input style="margin-left: 5px; padding: 5px" type="submit" value="Tambah">
        </form>
    </div>
    <h2 style="text-align: center">Daftar Plat Nomor</h2>
    <table border='1' style="text-align: center">
        <tr>
            <th>ID Plat</th>
            <th>Plat</th>
            <th>ID Pemilik</th>
            <th colspan="2">Action</th>
        </tr>
        <?php

        // Mendapatkan daftar plat nomor dari database
        if (isset($_GET['id_pemilik'])) {
            $query = "SELECT * FROM plat_nomor where id_pemilik=$_GET[id_pemilik]";
            $result = mysqli_query($conn, $query); 
            $no = 1; 
    
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $row['nomor'] . "</td>";
                echo "<td>" . $row['id_pemilik'] . "</td>";
                echo "<td><a href='editplat.php?nomor=" . $row['nomor'] . "'>Edit</a> | <a href='hapus.php?nomor=" . $row['nomor'] . "'>Hapus</a></td>";
                echo "</tr>";
                $no++;
            }
    
            mysqli_close($conn);
        }
        ?>
    </table>
</body>
</html>
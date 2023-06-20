<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lokasi Parkir</title>
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
    <button onclick="window.location.href='index.php'"> Kembali </button>
    <h2 style="text-align: center">Pilih Plat Nomor</h2>
    <table border='1' style="text-align: center">
        <tr>
            <th>No</th>
            <th>Plat</th>
            <th>ID Pemilik</th>
            <th>Lokasi</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php
        include "../module/koneksi.php";
        session_start();
        $query = "SELECT * FROM user WHERE id=$_SESSION[id]";
        $result = mysqli_query($conn, $query);
        $data_user = mysqli_fetch_array($result);
        // Mendapatkan daftar plat nomor dari database
        $query = "SELECT * FROM plat_nomor where id_pemilik=$_SESSION[id]";
        $result = mysqli_query($conn, $query);
        $no = 1;  

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $no . "</td>";
            echo "<td>" . $row['nomor'] . "</td>";
            echo "<td>" . $row['id_pemilik'] . "</td>";
            echo "<td>" . $row['lokasi_parkir'] . "</td>";
            echo "<td>" . (empty($row['waktu_keluar']) ? "Masih Parkir": "Tidak Parkir") . "</td>";
            echo "<td><a href='keluarparkir.php?plat=" . $row['nomor'] . "'>Keluar</a></td>";
            echo "</tr>";
            $no++;
        }
        mysqli_close($conn);
        ?>
    </table>
</body>
</html>
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
    <button onclick=window.location.href='menuparkir.php'> Kembali </button>
    <h2 style="text-align: center">Pilih Plat Nomor</h2>
    <table border='1' style="text-align: center">
        <tr>
            <th>No</th>
            <th>Plat</th>
            <th>ID Pemilik</th>
            <th>Action</th>
        </tr>
        <?php
        include "../module/koneksi.php";
        $query = "SELECT * FROM user WHERE id=$_GET[id_pemilik]";
        $result = mysqli_query($conn, $query);
        $data_user = mysqli_fetch_array($result);
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
                echo "<td><a href='parkir.php?plat=" . $row['nomor'] . "&nama=" . $data_user['username']. "'>Parkir</a></td>";
                echo "</tr>";
                $no++;
            }
            mysqli_close($conn);
        }
        ?>
    </table>
</body>
</html>
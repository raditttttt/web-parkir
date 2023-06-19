<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Plat Nomor</title>
</head>
<body>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: black;
            color: white;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background-color: #f2f2f2;
            border-radius: 5px;
        }
        input[type="text"] {
            padding: 8px;
            margin-bottom: 10px;
            width: 200px;
        }
        input[type="submit"] {
            padding: 8px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        table{
        background: #f6f1f1;
        color: black;
        }

        th{
        padding-block: 5px;
        }

    </style>
    <button onclick=window.location.href='index.php'>
<style>
    button{
        background: white;
        border: none;
        width:50px;
        height: 25px;
        padding-left: 1.5px;
    }
</style>
kembali
</button>
<div style="margin:auto">
    <h2>Daftar Plat Nomor</h2>
    <table border='1' style="text-align: center">
        <tr>
            <th>ID</th>
            <th>Plat</th>
            <th colspan="2">Action</th>

        </tr>
        <?php
        include "../module/koneksi.php";

        // Mendapatkan daftar plat nomor dari database
        $query = "SELECT * FROM plat_nomor";
        $result = mysqli_query($conn, $query);  

        $no = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $no . "</td>";
            echo "<td>" . $row['nomor'] . "</td>";
            echo "<td><a href='editplat.php?id_pemilik=" . $row['id_pemilik'] . "'>Edit</a> | <a href='hapus.php?id_pemilik=" . $row['id_pemilik'] . "'>Hapus</a></td>";
            echo "</tr>";
            $no++;
        }

        mysqli_close($conn);
        ?>
    </table>
    <h2>Tambah Plat Nomor</h2>
    <form action="tambah.php" method="post">
        <input type="text" name="nomor" placeholder="Plat Nomor" required>
        <input type="submit" value="Tambah">
    </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Plat Nomor</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Data Plat Nomor</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Plat Nomor</th>
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
            echo "</tr>";
            $no++;
        }

        mysqli_close($conn);
        ?>
    </table>
</body>
</html>

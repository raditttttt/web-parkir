<!DOCTYPE html>
<html>
<head>
    <title>Lokasi Parkir</title>
    <style>
        body{
            background: #212121;
            color: #f6f6f6; 
            font-family: 'trebuchet MS';
            padding-inline: 90px;
        }
        .parkir-blok {
            width: 50px;
            height: 50px;
            display: inline-block;
            border: 1px solid #ccc;
            text-align: center;
            font-size: 14px;
            cursor: pointer;
        }
        .parkir-blok.terisi {
            background-color: #ff0000;
            color: #fff;
        }
        button{
        background: white;
        border: none;
        width: 60px;
        height: 30px;
        margin-top: 25px;
        }
    </style>
</head>
<body>
<button onclick=window.location.href='menuparkir.php'> Kembali </button>

    <?php
    include "../module/koneksi.php";
    $kapasitas = 100;
    $parkir_motor = array_fill(0, $kapasitas, false);
    $sql = "SELECT * FROM plat_nomor";
    $result = mysqli_query($conn, $sql);
    $data_ditempati = array();
    date_default_timezone_set('Asia/Jakarta');
    $waktu_now = date("H:i d-m-Y");

    while ($data_temp = mysqli_fetch_assoc($result)){
        array_push($data_ditempati, $data_temp['lokasi_parkir']);
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nomor_parkir = $_POST["nomor_parkir"];

        if (in_array($nomor_parkir, $data_ditempati)){
            echo "<script> alert ('Lokasi parkir sudah ditempati') </script>";
        } else{
            $sql = "UPDATE plat_nomor SET lokasi_parkir = $nomor_parkir, waktu_masuk = '$waktu_now', waktu_keluar = NULL WHERE nomor = '$_GET[plat]'";
            mysqli_query($conn, $sql);
            echo "<script> alert ('Berhasil Parkir')</script>";
            $sql = "SELECT * FROM plat_nomor";
            $result = mysqli_query($conn, $sql);
            $data_ditempati = array();
        
            while ($data_temp = mysqli_fetch_assoc($result)){
                array_push($data_ditempati, $data_temp['lokasi_parkir']);
            }
        }
    }
    ?>
    <h2><?= $_GET['nama'] ?> - <?= $_GET['plat'] ?></h2>
    <h1 style="text-align: center">Pilih Lokasi Parkir</h1>
    <?php
    for ($i = 0; $i < $kapasitas; $i++) {
        $status = $parkir_motor[$i] ? 'terisi' : '';

        if (in_array($i + 1, $data_ditempati)){
            echo '<div class="parkir-blok ' . $status . '" style="background: red">' . ($i + 1) . '</div>';
        } else {
            echo '<div class="parkir-blok ' . $status . '">' . ($i + 1) . '</div>';
        }
    }
    ?>
    
    <br><br>
    <form method="post">
        <label for="nomor_parkir">Nomor Parkir:</label>
        
        <input type="number" id="nomor_parkir" name="nomor_parkir" min="1" max="<?php echo $kapasitas; ?>" required>
        <input type="submit" value="Parkir">
    </form>
</body>
</html>
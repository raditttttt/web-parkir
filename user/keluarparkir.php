<?php
include "../module/koneksi.php";
$sql = "SELECT * FROM plat_nomor";
$result = mysqli_query($conn, $sql);
date_default_timezone_set('Asia/Jakarta');
$waktu_now = date("H:i d-m-Y");
$data_ditempati = array();

while ($data_temp = mysqli_fetch_assoc($result)){
    array_push($data_ditempati, $data_temp['lokasi_parkir']);
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nomor_parkir = $_GET["plat"];

    if (in_array($nomor_parkir, $data_ditempati)){
        echo "<script> alert ('Lokasi parkir sudah ditempati'); window.location.href='parkiruser.php'</script>";
    } else{
        $sql = "UPDATE plat_nomor SET waktu_keluar = '$waktu_now' WHERE nomor = '$_GET[plat]'";
        mysqli_query($conn, $sql);
        echo "<script> alert ('Berhasil Keluar'); window.location.href='parkiruser.php'</script>";
        $sql = "SELECT * FROM plat_nomor";
        $result = mysqli_query($conn, $sql);
        $data_ditempati = array();
    
        while ($data_temp = mysqli_fetch_assoc($result)){
            array_push($data_ditempati, $data_temp['lokasi_parkir']);
        }
    }
}
?>
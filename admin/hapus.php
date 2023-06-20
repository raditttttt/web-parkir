<?php
include "../module/koneksi.php";

$id = $_GET['nomor'];

// Menghapus plat nomor dari database berdasarkan ID
$query = "DELETE FROM plat_nomor WHERE nomor='$id'";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "<script> alert ('Data sudah terhapus');window.location.href='kelolaplatnomor.php'</script>";
    exit();
} else {
    echo "Gagal menghapus plat nomor.";
}

mysqli_close($conn);
?>

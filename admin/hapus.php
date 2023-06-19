<?php
include "../module/koneksi.php";

$id = $_GET['id_pemilik'];

// Menghapus plat nomor dari database berdasarkan ID
$query = "DELETE FROM plat_nomor WHERE id_pemilik=$id";
$result = mysqli_query($conn, $query);

if ($result) {
    header("Location: kelolaplatnomor.php");
    exit();
} else {
    echo "Gagal menghapus plat nomor.";
}

mysqli_close($conn);
?>

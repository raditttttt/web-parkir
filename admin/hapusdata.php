<?php
include "../module/koneksi.php";

// Menghapus data pengguna
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk menghapus data pengguna berdasarkan ID
    $query = "DELETE FROM user WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        echo "<script> alert ('Data sudah terhapus');window.location.href='keloladata.php'</script>";
    } else {
        echo "Terjadi kesalahan saat menghapus data pengguna: ";
    }
}

// Menutup koneksi ke database
$conn->close();
?>

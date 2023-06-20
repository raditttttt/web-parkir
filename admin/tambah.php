<?php
include "../module/koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nomor = $_POST['nomor'];
    $id_pemilik = $_POST['id_pemilik'];

    // Menyimpan plat nomor ke database
    $query = "INSERT INTO plat_nomor (nomor, id_pemilik) VALUES ('$nomor', '$id_pemilik')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script> alert ('data sudah terdaftar');window.location.href='kelolaplatnomor.php?id_pemilik=$id_pemilik'</script>";
    } else {
        echo "Gagal menambahkan plat nomor.";
    }

    mysqli_close($conn);
}
?>

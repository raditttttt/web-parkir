<?php
include "../module/koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nomor = $_POST['nomor'];

    // Menyimpan plat nomor ke database
    $query = "INSERT INTO plat_nomor (nomor) VALUES ('$nomor')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script> alert ('data sudah terdaftar');window.location.href='kelolaplatnomor.php'</script>";
    } else {
        echo "Gagal menambahkan plat nomor.";
    }

    mysqli_close($conn);
}
?>

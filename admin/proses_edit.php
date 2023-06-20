<?php
include "../module/koneksi.php";

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Periksa apakah data dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari formulir
    $id = $_POST["id"];
    $name = $_POST["username"];
    $pass = $_POST["password"];

    // Update data di database
    $sql = "UPDATE user SET username='$name', password='$pass' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "<script> alert ('Data berhasil diupdate');window.location.href='keloladata.php'</script>";
        header("Location: keloladata.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Tutup koneksi
mysqli_close($conn);
?>

<?php
// Koneksi ke database
$conn = mysqli_connect("nama_host", "nama_pengguna", "kata_sandi", "nama_database");

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Periksa apakah data dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari formulir
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Update data di database
    $sql = "UPDATE nama_tabel SET nama='$name', email='$email' WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil diupdate.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Tutup koneksi
mysqli_close($conn);
?>
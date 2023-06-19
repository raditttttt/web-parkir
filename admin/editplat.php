<?php
include "../module/koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nomor = $_POST['nomor'];

    // Mengupdate plat nomor di database
    $query = "UPDATE plat_nomor SET nomor='$nomor' WHERE id_pemilik='$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: kelolaplatnomor.php");
        exit();
    } else {
        echo "Gagal mengupdate plat nomor.";
    }

    mysqli_close($conn);
} else {
    $id = $_GET['id_pemilik'];

    // Mendapatkan data plat nomor berdasarkan ID dari database
    $query = "SELECT * FROM plat_nomor WHERE id_pemilik='$id'";
    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($result);
    $nomor = $row['nomor'];

    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Plat Nomor</title>
</head>
<body>
    <h2>Edit Plat Nomor</h2>
    <form action="kelolaplatnomor.php" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <input type="text" name="nomor" value="<?= $nomor ?>" required>
        <input type="submit" value="Update">
    </form>
</body>
</html>

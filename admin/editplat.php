<?php
include "../module/koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nomorold = $_POST['nomorold'];
    $nomor = $_POST['nomor'];

    // Mengupdate plat nomor di database
    $query = "UPDATE plat_nomor SET nomor='$nomor' WHERE nomor='$nomorold'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script> alert ('Data berhasil diupdate');window.location.href='kelolaplatnomor.php?id_pemilik=$id_pemilik'</script>";
        exit();
    } else {
        echo "Gagal mengupdate plat nomor.";
    }

    mysqli_close($conn);
} else {
    $id = $_GET['nomor'];

    // Mendapatkan data plat nomor berdasarkan ID dari database
    $query = "SELECT * FROM plat_nomor WHERE nomor='$id'";
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
<style>
    body{
        display: grid;
        background-color: #212121;
        color: #f6f1f1;
        grid-template-rows: auto auto;
    }

    form{
        margin: auto;
    }

    button{
        height: 30px;
        width: 60px;
        color: black;
        background: #f6f1f1;
        border: none;
        align: right;
        margin-top: 20px;
        margin-left: 20px;
        margin-bottom: 50px;
    }
</style>

<body>
    <button onclick="window.location.href= 'kelolaplatnomor.php'">Kembali</button>
    <form action="" method="post">
        <h2>
            Edit Plat Nomor
        </h2>
        <input type="hidden" name="nomorold" value="<?= $_GET['nomor'] ?>">
        <input type="text" name="nomor" value="<?= $nomor ?>" required>
        <input type="submit" value="Update">
    </form>
</body>
</html>

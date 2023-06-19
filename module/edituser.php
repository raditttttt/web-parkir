<?php
include "../module/koneksi.php";

if (isset($_POST['username'])){
    $edit = "UPDATE user SET username = '$_POST[username]', `password` = '$_POST[password]'
    WHERE username = '$_SESSION[username]'";
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    $hasil = mysqli_query($conn, $edit);

    if ($hasil){
        echo "<script> alert('Data berhasil diedit'); window.location.href = '../user/index.php'; </script>";
    }
}
?>
<?php
include "../module/koneksi.php";
session_start();

$login = mysqli_query($conn, "SELECT * from user where username='$_POST[username]'");
$rowcount = mysqli_num_rows($login);

if ($rowcount > 0 && $_POST['username'] == $_SESSION){
    echo "<script> alert('Username sudah digunakan'); window.location.href = '../user/akun.php'; </script>";
} else {
    $edit = "UPDATE user SET username = '$_POST[username]', `password` = '$_POST[password]'
    WHERE username = '$_SESSION[username]'";
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    $hasil = mysqli_query($conn, $edit);

    if ($hasil){
        echo "<script> alert('Data berhasil diubah'); window.location.href = '../user/index.php'; </script>";
    }
}
?>
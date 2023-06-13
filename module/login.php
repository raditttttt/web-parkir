<?php
include "koneksi.php";

session_start();

if(isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cekuser = mysqli_query($conn, "SELECT * FROM user WHERE BINARY username='$username' AND `password`='$password'");
    $hitung = mysqli_num_rows($cekuser);

    if($hitung > 0){
        //kalau data ditemukan
        $ambildatarole = mysqli_fetch_array($cekuser);
        $role = $ambildatarole['role'];

        if($role == 'admin'){
            //kalau dia admin
            $_SESSION['log'] = 'Logged';
            $_SESSION['role'] = 'Admin';
            header('location:../admin');

        } else {
            //kalau dia admin
            $_SESSION['log'] = 'Logged';
            $_SESSION['role'] = 'User';
            header('location:../user');
        }
    } else {
        //kalau tidak ditemukan
        echo '<script>alert("Data tidak ditemukan")</script>';
    }
}
?>
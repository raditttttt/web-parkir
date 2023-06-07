<?php
$conn = mysqli_connect("localhost", "root", "", "parking-lot");

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cekuser = mysqli_query($conn, "select * from user where username='$username' and password='$password'");
    $hitung = mysqli_num_rows($cekuser);

    if($hitung > 0){
        //kalau data ditemukan
        $ambildatarole = mysqli_fecth_array($cekuser);
        $role = $ambildatarole['role'];

        if($role == 'admin'){
            //kalau dia admin
            $_SESSION['log'] = 'Logged';
            $_SESSION['role'] = 'Admin';
            header('location:admin');

        } else {
            //kalau dia admin
            $_SESSION['log'] = 'Logged';
            $_SESSION['role'] = 'User';
            header('location:user');
        }
    } else {
        //kalau tidak ditemukan
        echo 'Data tidak ditemukan';
    }
}
?>
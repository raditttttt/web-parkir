<?php
include "../module/koneksi.php";
$sql = "SELECT * FROM user WHERE id=$_GET[id]";
$result = mysqli_query($conn, $sql);
$data_terpilih = mysqli_fetch_array($result);

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <style>

    body{
        display: grid;
        background-color: #212121;
        color: #f6f1f1;
        grid-template-rows: auto auto;
        font-family: 'Trebuchet MS';
        font-weight: bold;
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
<h2 style="margin: auto">Edit Data</h2>
    <form method="post" action="proses_edit.php">
        <input type="hidden" name="id" value="<?php echo $data_terpilih['id']; ?>">
        <label for="name">Nama:</label>
        <input type="text" name="username" value="<?php echo $data_terpilih['username']; ?>"><br><br>
        <label for="email">Password:</label>
        <input type="password" name="password" value="<?php echo $data_terpilih['password']; ?>"><br><br>
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>
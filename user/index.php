<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman User</title>
</head>
<style>
    body{
        margin: 0;
        background: #212121;
    }

    main{
        background-color: bisque;
        border-radius: 8px;
        box-shadow: 1px 2px 10px white;
        height: 400px;
        width: 400px;
        left: calc((100vw - 420px)/ 2);
        position: absolute;
        top: calc((100vh - 400px)/ 2);
        padding: 20px;
    }
    
    main button{
        display: block;
        width: 100%;
        height: 80px;
        margin-top: 80px;
        border-radius: 8px;
        font-family: 'Trebuchet MS';
        font-weight: bold;
    }
</style>
<body>
    <button onclick="window.location.href= '../'" style="height: 30px;
        width: 60px;
        color: black;
        background: #f6f1f1;
        border: none;
        align: right;
        margin-top: 28px;
        margin-left: 28px;
        margin-bottom: 50px">Kembali</button>
    <main>
        <button onclick="window.location.href='akun.php'"> Edit Akun </button>
        <button onclick="window.location.href='parkiruser.php'"> Lihat Lokasi Parkir </button>
    </main>
</body>
</html>
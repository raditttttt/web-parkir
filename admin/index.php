<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
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
        height: 485px;
        width: 400px;
        left: calc((100vw - 440px)/ 2);
        position: absolute;
        display: grid;
        top: calc((100vh - 485px)/ 2);
        padding: 20px;
        row-gap: 20px;
    }
    
    main button{
        border-radius: 8px;
        font-family: 'Trebuchet MS';
        font-weight: bold;
    }

</style>
<body>
    <main>
        <button onclick="window.location.href='keloladata.php'"> Kelola Data User </button>
        <button onclick="window.location.href='kelolaplatnomor.php'"> Kelola Plat Nomor </button>
        <button onclick="window.location.href='keloladataadmin.php'"> Kelola Data Admin </button>
        <button> Parkir </button>
        <button> Grafik </button>
    </main>
</body>
</html>
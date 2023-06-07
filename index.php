<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bike Parking Lot</title>

    <link rel="stylesheet" href="style/style-login.css">
</head>
<body>
    <div id="kartu">
        <div id="title-kartu">
            <img src="img/login.png" alt="Avatar" style="width: 35%; border-radius: 50%">
            <h2> WELCOME </h2>
        </div>
        <?php
        require "module/koneksi.php";
        ?>
        <form method="post" class="form">
            <label for="username" style="padding-top: 6px; margin-left: 10px">
            &nbsp;
            <b>USERNAME</b>
            </label>
            <input type="text" id="username" class="form-konten" name="username" required/>
            <div class="form-border"></div>
            <br>

            <label for="password" style="pading-top: 12px; margin-left: 10px">
                &nbsp;
                <b>PASSWORD</b>
            </label>
            <input type="password" id="password" class="form-konten" name="password" required/>
            <div class="form-border"></div>
            <button id="submit-btn" type="submit" value="login">LOGIN</button>
        </form>
    </div>
</body>
</html>
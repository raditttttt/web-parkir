<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
<h2>Edit Data</h2>
    <form method="post" action="proses_edit.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="name">Nama:</label>
        <input type="text" name="name" value="<?php echo $_SESSION['username']; ?>"><br><br>
        <label for="email">Password:</label>
        <input type="password" name="password" value="<?php echo $_SESSION['password']; ?>"><br><br>
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>
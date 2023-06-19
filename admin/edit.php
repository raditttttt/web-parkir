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
        <input type="text" name="name" value="<?php echo $name; ?>"><br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $email; ?>"><br><br>
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once 'proces.php'; ?>

    <?php
     $mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($mysqli));
     $rekord = $mysqli->query("SELECT * FROM dane") or die(mysqli_error($mysqli));
    ?>

    <form action="proces.php" method="POST">
        <p>Imie: <input type="text" name="imie" id=""></p>
        <p>Lokalizacja: <input type="text" name="lokalizacja" id=""></p>
        <input type="submit" value="Zapisz" name="submit1">
    </form>
</body>
</html>
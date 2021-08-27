<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modyfikowanie</title>
</head>
<body>
    <h1>Podgląd</h1>
    <table>
        <thead>
            <tr>id </tr>
            <tr>imie </tr>
            <tr>lokalizacja </tr>
        </thead>
    <?php
        require_once "config.php";

        $sql_view = "SELECT * FROM dane";
        $result = $mysqli->query($sql_view);
        while($row = $result->fetch_array()){ ?>

        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['imie']; ?></td>
            <td><?php echo $row['lokalizacja']; ?></td>
        </tr>
        <?php } ?>
    </table>

    <h3>Edytuj Rekord</h3>

    <form action="mod.php" method="get">
        <legend>Dane</legend>
        ID: <br><input type="number" name="id"><br>
        Imie:<br><input type="text" name="imie"><br>
        Lokalizacja:<br><input type="text" name="lokalizacja"><br>
        <br><input type="submit" name="submit" value="edytuj">
    </form>

    <?php
        require_once "config.php";

        if(isset($_GET['id']))
        {
            
            $id = $_GET['id'];
            $imie = $_GET['imie'];
            $lokalizacja = $_GET['lokalizacja'];
            $sql_up = "UPDATE dane SET imie = '$imie', lokalizacja = '$lokalizacja' WHERE id = $id";

            if($mysqli->query($sql_up) == true);
            {
                echo "Zedytowano rekord";
            }
        }
    ?>
    <br><a href="index.php">Wróć</a><br>
</body>
</html>
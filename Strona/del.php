<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuwanie</title>
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

    <h1>Usuń rekord</h1>

    <form action="del.php" method="get">
        <legend>Wpisz ID</legend>
        <input type="number" name="id">
        <input type="submit" name="submit" value="usuń">
    </form>

    <?php
        require_once "config.php";

        if(isset($_GET['id']))
        {
            
            $id = $_GET['id'];
            $sql_del = "DELETE FROM dane WHERE id=$id";
            if($mysqli->query($sql_del) == true);
            {
                echo "usunięto rekord";
            }
        }
    ?>
    <br><a href="index.php">Wróć</a><br>
</body>
</html>
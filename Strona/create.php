<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodawanie rekordów</title>
</head>
<body>
    <h1>Dodawanie rekordów</h1>

    <?php
        require_once "config.php";

        $imie;
        $lokalizacja;


        if($_POST['imie'] && $_POST['lokalizacja'] != NULL) // Jeżeli wypełnił formularz
        {
            $imie = $_POST['imie'];
            $lokalizacja = $_POST['lokalizacja']; // pobranie danych z POST
            
            $sql_add = "INSERT INTO `dane` (imie, lokalizacja) VALUES ('$imie', '$lokalizacja')"; // Zmienna z SQL

            if($mysqli->query($sql_add) === true) // Dodanie rekordu wraz z sprawdzeniem
            {
                echo "Dodano rekord";
            }
            else
            {
                echo "Nie udało się dodać rekordu" . $mysqli->error;
            }
        }
        else
        {
            echo "Wypełnij Formularz";
        }
    ?>

    <form action="create.php" method="post">
        Imie:<br><input type="text" name="imie"><br>
        lokalizacja:<br><input type="text" name="lokalizacja"><br>
        <br><input type="submit" name="submit" value="dodaj">
    </form>

    <br><a href="index.php">Wróć</a><br>
</body>
</html>
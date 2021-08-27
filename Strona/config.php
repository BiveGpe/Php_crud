<?php
    //Stałe z danymi do bazy danych
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'crud');

    $mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME); //Połączenie z bazą danych

    if($mysqli === false)
    {
        die($mysqli->connect_error);
    }
?>
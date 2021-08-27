<?php  
 $mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($mysqli)); // Połączenie z bazą danych

 if(isset($_POST['submit1']))
 {
     $imie = $_POST['imie'];
     $lokalizacja = $_POST['lokalizacja'];

     $mysqli->query("INSERT INTO dane (imie,  lokalizacja) VALUES('$imie', '$lokalizacja')") or die($mysqli->error);
 }
?>
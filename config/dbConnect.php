<?php
$user = "root"; //variavel em PHP usa $
$pass = "";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=maratona', $user, $pass);
} catch (PDOException $e) {
    echo "Erro!";
    echo $e;
}
?>
<?php
$user = "root"; //variavel em PHP usa $
$pass = "123456";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=maratona_db', $user, $pass);
} catch (PDOException $e) {
    echo "Erro!";
    echo $e;
}
?>
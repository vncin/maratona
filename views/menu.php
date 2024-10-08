<?php
require_once('../config/dbConnect.php'); //importando o arquivo de conexao com o banco de dados

$consulta = "SELECT * FROM aluno";
$estado = $dbh->query($consulta);
$listaAlunos = $estado->fetchAll(PDO::FETCH_ASSOC);
?>
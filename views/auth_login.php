<?php
require_once('../config/dbConnect.php');

$login = $_POST['login'];
$senha = $_POST['senha'];

$verificaUsuario = "SELECT  matricula, nome, senha FROM 
professor 
WHERE
matricula = :mat AND senha = :senha";

$req = $dbh->prepare($verificaUsuario);
$req->bindValue(':mat', $login);
$req->bindValue(':senha', $senha);
$req->execute();
$dadosUsuario = $req->fetch(PDO::FETCH_ASSOC);

if($dadosUsuario){
    echo "Usuario encontrado!";
    echo "Encaminhar para o menu...";
    
    header('Location: ./login.php?sucesso=1');
}else{
    echo "Usuario não encontrado, verifique os dados de login!";
    header('Location: ./login.php?sucesso=0');
}

?>
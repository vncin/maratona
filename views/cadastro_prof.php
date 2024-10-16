<?php 
//Lógica de inserção na tabela professor
require_once ('../config/dbConnect.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $nome = filter_input(INPUT_POST, 'nome-completo');
    $matricula = filter_input(INPUT_POST, 'matricula');
    $senha = filter_input(INPUT_POST, 'senha');

    $senha = password_hash($senha, PASSWORD_ARGON2ID);
    #ofuagftukadgfdhlkf

    $insertProf = "INSERT INTO professor VALUES(:mat, :nome, :senha)";
    $req = $dbh->prepare($insertProf);
    $req->bindValue(':mat', $matricula);
    $req->bindValue(':nome', $nome);
    $req->bindValue(':senha', $senha);
    if($req->execute()){
        header("Location: ./view_cadastro_prof.php?sucesso=1");
    }else{
        header("Location: ./view_cadastro_prof.php?sucesso=0");
    }

}else{
    header("Location: ./view_cadastro_prof.php");
}


/* 
1º Receber as informações do HTML via POST
2º preparar a string de inserção 
3º executar
4º Exibir uma mensagem de cadastro realizador com sucesso.

*/
?>
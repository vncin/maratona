<?php 
require_once('../../config/dbConnect.php');

if($_SERVER['REQUEST_METHOD'] == "GET"){
    $matricula = $_GET['matricula'];

    $deleteProf = "UPDATE professor SET situacao = '0' WHERE matricula = :matricula";
    $req = $dbh->prepare($deleteProf);
    $req->bindValue(':matricula', $matricula);
    if($req->execute()){
        header('Location: ../../views/view_gerencia_prof.php');
    }else{
        header('Location: ../../views/view_gerencia_prof.php');
    }

}


?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alunos</title>
</head>
<body>
    <section>
        
            <table class="table">
            <thead>
                <tr>
                <th scope="col">Matricula</th>
                <th scope="col">Nome Completo</th>
                <th scope="col">NickName</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    require_once('menu.php');
                    foreach($listaAlunos as $aluno){
                        echo "<tr>
                                    <th scope='row'>{$aluno['matricula']}</th>
                                    <td>{$aluno['nome_completo']}</td>
                                    <td>{$aluno['nickname']}</td>
                                </tr>";
                    }
                ?>
            </tbody>
            </table>
    </section>
    
</body>
</html>
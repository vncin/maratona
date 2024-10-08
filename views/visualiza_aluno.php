<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/estiloVisualizaAluno.css">
    <title>Lista de Alunos</title>
</head>

<body>
    <section>
        <table class="table">
            <thead>
                <tr>
                    <th>Matricula</th>
                    <th>Nome Completo</th>
                    <th>NickName</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                require_once('menu.php');
                        foreach ($listaAlunos as $aluno){
                            echo "
                            <tr>
                                <th> {$aluno['matricula']}
                                </th>
                                <td> {$aluno['nome_completo']} </td>
                                <td> {$aluno['nickname']} </td>
                            </tr>
                                "; } 
                ?>
                
                <?php
                    require_once('menu.php');
                    if (isset($listaAlunos)):
                        foreach ($listaAlunos as $aluno):
                ?>
                        <tr>
                            <th> <?= "{$aluno['matricula']}" ?>
                            </th>
                            <td> <?= "{$aluno['nome_completo']}" ?> </td>
                            <td> <?= "{$aluno['nickname']}" ?> </td>
                        </tr>
                <?php
                    endforeach;

                endif; ?>

            </tbody>
        </table>
    </section>

</body>

</html>
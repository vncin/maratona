<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../public/css/estiloGerenciaProf.css">
    <title>Gerenciamento de Professor</title>
</head>
<body>
        <main class="principal">
            <h1>Professor</h1>
            <nav class="div-botao-cadastrar">
                <a href="javascript: history.go(-1)" class="botao-voltar"><i class="fa-solid fa-arrow-left voltar"></i></a>
                <a href="view_cadastro_prof.php" class="botao-cadastrar"> <i class="fa-solid fa-user-plus"></i> Novo Professor</a>
            </nav>
            <section class="tabela-conteudo">
                <table>
                    <thead>
                        <th class="nome-completo">Nome Completo</th>
                        <th class="acoes">Ações</th>
                    </thead>
                    <tbody>
                    <?php 
                        require_once('../config/dbConnect.php');
                        $sqlProfessores = "SELECT matricula, nome FROM professor ORDER BY nome ASC";
                        $resultado = $dbh->query($sqlProfessores);
                        $listaProfessores = $resultado->fetchAll(PDO::FETCH_ASSOC);
                        if(count($listaProfessores) > 0){
                            foreach($listaProfessores as $professor){      
                    ?>
                        <tr>
                           <td class="nome-completo"><?= $professor['nome'] ?></td> 
                           <td class="acoes acoes-icones">
                            <a href="view_detalhes_prof.php" class="link-acoes detalhes"><i class="fa-solid fa-eye"></i></a>
                            <a href="view_editar_prof.php" class="link-acoes editar"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="../src/controllers/deletar_prof.php?matricula=<?= $professor['matricula']; ?>" class="link-acoes deletar"><i class="fa-solid fa-trash"></i></a>
                           </td> 
                        </tr>
                        <?php 
                            }
                        }else{
                            echo "Não há professores cadastrados";
                        }
                        ?>
                    </tbody>                    
                </table>

            </section>
        </main>
        <footer>
            <h2>MiniMaratona MédioTec</h2>
        </footer>
</body>
</html>
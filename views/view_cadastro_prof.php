<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/estiloFormCadProf.css">
    <title>Cadastro de Professor</title>
</head>
<body>
    <main class="principal">
        <section class="conteudo">
            <h1>Professor <br/>Cadastre-se agora mesmo no WebRanking</h1>
            <form action="./cadastro_prof.php" method="POST" class="formulario">
                <div class="div-nome-matricula">
                    <div class="form-input">
                        <label for="nome-completo">Nome Completo</label>
                        <input type="text" name="nome-completo" id="nome-completo" required>
                    </div>
                    <div class="form-input">
                        <label for="matricula">Matrícula</label>
                        <input type="text" name="matricula" id="matricula" required>
                    </div>
                </div>
                <div class="form-input-senha">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" required >
                </div>
                <button type="submit" class="botao">Cadastrar</button>

                    <?php 
                        if(isset($_GET['sucesso'])){
                            if($_GET['sucesso'] == 0){
                                echo "<span> Professor não cadastrado!!</span>";
                            }else{
                                echo "<span> Professor cadastrado!!</span>";
                            }
                    }
                    ?> 
                
            </form>
            
        </section>
    </main>
    <footer>
         <h2>MiniMaratona MédioTec</h2>
    </footer>
</body>
</html>
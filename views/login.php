<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../public/css/styleLoginMaratona.css">
    <title>Maratona - Web Ranking</title>
</head>

<body>
    <?php echo '
    <header class="cabecalho">
    </header>
    <main class="img-fundo">

        <section class="section-form">
            <div class="form-titulo">
                <h1>Bem vindo ao WebRanking</h1>
            </div>
            <div class="form-link">
                <p>Entre com seu Acesso ou</p>
                <a href="./view_cadastro_prof.php">Cadastre-se aqui</a>
            </div>
            <form action="./auth_login.php" method="POST" class="form-login">
                <input type="text" name="login" id="login" placeholder="Login" required>
                <input type="password" name="senha" id="senha" placeholder="Senha" required>
                <button type="submit"> Entrar </button>'; ?>
                <span> <?php echo (isset($_GET['sucesso']) && $_GET['sucesso'] == 0) ? "Usuário não encontrado" : ""; ?> </span>
            </form>
            <div class="form-img">
                <img src="../public/imgs/senac_logo.png" alt="Logomarca do Senac" class="img-logo-senac">
            </div>
        </section>
    </main>
    <footer class="rodape">

    </footer>
</body>

</html>

<?php
//chama a classe que realiza o cadastro do usuário
if(isset($_POST['submit'])){
    include_once ('back/processa_cadastro.php');
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/cadastro.css">
    <title>Cadastro_Redai</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&family=Sora:wght@100;200;300;400;500;600;700;800&display=swap');
    </style>
</head>

<body>
    <main>
        <div class="botoes-trocar-tela">
            <a class="botao-tela-entrar" href="login.php">
                Entrar
            </a>
            <a class="botao-tela-cadastrar" href="#"> Cadastrar </a>
        </div>
        <div class="content">
            <div id="textos-login">
                <h3> Bem vindo ao Redaí 👋</h3>
                <p>Vamos começar com o básico</p>
            </div>

            <form action="back/processa_cadastro.php" method="post">
                <div class="campos">
                    <label for="nome_completo" class="label">Nome Completo</label>
                    <input type="text" id="nome" name="nome_completo" class="inputs" placeholder="Seu nome completo">
                </div>
                <div class="campos">
                    <label for="username" class="label">Nome de Usuário</label>
                    <input type="text" id="username" name="username" class="inputs" placeholder="Seu nome de usuário">
                </div>
                <div class="campos">
                    <label for="email" class="label">Email</label>
                    <input type="email" id="email" name="email" placeholder="seuemail@gmail.com" class="inputs"
                        autocomplete="email" required maxlength="30">
                </div>
                <div class="campos">
                    <label for="senha" class="label">Senha</label>
                    <input type="password" id="senha" name="senha" placeholder="sua senha" class="inputs"
                        autocomplete="current-password" required minlength="6" max="8">
                </div>
                <button type="submit" id="cadastrar" name="submit" value="cadastrar" > Cadastrar
                </button>
            </form>
    </main>
</body>

</html>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <link rel="stylesheet" type="text/css" href="css/media-query.css">
  <title>Login</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&family=Sora:wght@100;200;300;400;500;600;700;800&display=swap');
  </style>
</head>

<body>
  <main>
    <div class="botoes-trocar-tela">
      <a class="botao-tela-entrar" href="#">
        Entrar
      </a>
      <a class="botao-tela-cadastrar" href="cadastro.php"> Cadastrar </a>
    </div>
    <div class="content">
      <div id="textos-login">
        <h3> Bem vindo de volta 👋</h3>
        <p>Entre com o seu e-mail e sua senha</p>
      </div>

      <form action="back/processa_login.php" method="post">
        <div class="campos">
          <label for="e-mail" class="label"> E-mail</label>
          <input type="text" name="email" placeholder="seuemail@gmail.com" id="e-mail" class="inputs" autocomplete="email" required
            maxlength="30">
          <span class="campo-span"> Digite um e-mail válido</span>
        </div>
        <div class="campos">
          <label for="senha" class="label"> Senha</label>
          <input type="password" placeholder="sua senha" name="senha" id="senha" class="inputs" autocomplete="current-password"
            required minlength="6" max="8">
        </div>
        <div class="lembrar-esqueci">
          <label class="label"> <input type="checkbox"> Lembrar minha senha </label>
          <a href="#"> Esqueci minha senha</a>
        </div>
        <button name="submit" type="submit"> Entrar </button>
        <span> </span>
      </form>
    </div>

  </main>

</body>

</html>

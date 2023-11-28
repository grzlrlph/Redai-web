<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Redaí</title>
  <link rel="stylesheet" type="text/css" href="css/header.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo $caminho_css?>" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

</head>

<body>
  <header>
    <img src="imagens/logo.png" class="w-[126px]">
    <nav>
      <ul id="menu-nav">
        <li> <a href="index.php" class="ativa"> Home </a></li>
        <li> <a> Categorias </a> </li>
        <li> <a> Temas </a></li>
        <li> <a> Sobre </a> </li>
      </ul>
    </nav>
    <?php
    echo empty($_SESSION['email']) ? "<a href= 'login.php' id='btnEntrar' class='botao show'> Entrar </a>" :
    "<div class='w-[126px] foto-perfil-div'> <img src='imagens/fotoPerfilDefault.png' alt='foto de perfil' class='w-10 h-10 foto-perfil show'> </div>"

    /*if (empty($_SESSION['email'])){
      echo "<a href= 'login.php' id='btnEntrar' class='botao'> Entrar </a>";
    } else{
      echo "<img src='imagens/fotoPerfilDefault.png' alt='foto de perfil' class='w-10 h-10 foto-perfil'>";
    }*/
    ?>

  </header>
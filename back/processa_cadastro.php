<?php
    include_once('conexao.php');

    $username = $_POST["username"];
    $nome = $_POST["nome_completo"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $caminho_imagem_padrao = "imagens/fotoPerfilDefault.png";
    $tipoImagem = ".png";


    $sql = "INSERT INTO usuario(username, nome, email, senha, fotoPerfil, tipoFoto) 
    VALUES ('$username', '$nome', '$email', '$senha', 
    '$caminho_imagem_padrao', '$tipoImagem')";

    $result = mysqli_query($conexao, $sql);

    header('Location: /redai/index.php');

?>
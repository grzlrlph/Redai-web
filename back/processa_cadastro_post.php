<?php
    include_once('conexao.php');

    $titulo = $_POST["titulo"];
    $conteudo = $_POST["conteudo"];
    // $email = $_POST["email"];
    // $senha = $_POST["senha"];
    //$caminho_imagem_padrao = "imagens/fotoPerfilDefault.png";
    //$tipoImagem = ".png";


    $sql = "INSERT INTO posts(titulo,conteudo) 
    VALUES ('$titulo', '$conteudo')";

    $result = mysqli_query($conexao, $sql);

    header('Location: /redai/index.php');

?>
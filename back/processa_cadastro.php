<?php
    require_once('conexao.php');

    $username = $_POST["username"];
    $nome = $_POST["nome_completo"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $bancoDados = new db();

    $link = $bancoDados-> conecta_mysql();

    $sql = "INSERT INTO usuario(username, nome, email, senha) 
    VALUES ('$username', '$nome', '$email', '$senha')";

    mysqli_query($link,$sql);

?>
<?php
    include_once('conexao.php');

    $username = $_POST["username"];
    $nome = $_POST["nome_completo"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "INSERT INTO usuario(username, nome, email, senha) 
    VALUES ('$username', '$nome', '$email', '$senha')";

    $result = mysqli_query($conexao, $sql);

?>
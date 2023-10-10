<?php
    require_once('conexao.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $bancoDados = new db();

    $link = $bancoDados-> conecta_mysql();




?>
<?php
 include ('conexao.php');

 if(empty($_POST['email'] || empty($_POST['senha']))){
    //header ('Location: login.html');

 }

 $bancoDados = new db();

    $link = $bancoDados-> conecta_mysql();

 $email = mysqli_real_escape_string ($link, $_POST['email']);
 $senha = mysqli_real_escape_string ($link, $_POST['senha']);

$query = "SELECT * from usuario where email= '$email' and senha = '$senha'";
echo query; exit; 

$result = mysqli_query($link, $query);

$row = mysqli_num_rows($result);
echo $result;



?>
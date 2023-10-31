<?php
    include_once('conexao.php');
       if(!empty($_POST['username']))
       {
           $username = $_POST['username'];
           $sqlSelect = "SELECT * FROM usuarios WHERE username=$username";
           $result = $conexao->query($sqlSelect);  
           
          if($result->num_rows > 0)
          {
              $sqlDelete = "DELETE FROM usuarios WHERE username=$username";
              $resultDelete = $conexao->query($sqlDelete);
          }
        }else{
          header('Location: telaPerfil.php');
        }
        
    ?>


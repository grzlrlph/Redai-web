<?php

  //include_once ('back/verificaSessao.php');
  // session_start();
  
?>

<?php
session_start();
//print_r($_SESSION);
$caminho_css = "css/style.css";
include 'header.php';
?>

  <section>
    <div id="banner">
      <!--<h1> Repertórios para redações </h1>-->
      <img src="imagens/doodle-da-esquerda.png" alt="doodles">
      <div id="banner-texto">
        <img src="imagens/texto principal.png" alt="titulo">
        <p> “O sucesso é a soma de pequenos esforços </br> repetidos dia após dia.”</p>
      </div>
      <img src="imagens/doodle-da-direita.png" alt="doodles" width="270.64px";>
    </div>

    <div id="barra-pesquisa">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" id="pesquisa-icon">
        <g clip-path="url(#clip0_432_534)">
          <path fill-rule="evenodd" clip-rule="evenodd"
            d="M9.45977 1.25C4.92562 1.25 1.25 4.92563 1.25 9.45974C1.25 13.9938 4.92562 17.6695 9.45977 17.6695C11.3783 17.6695 13.1444 17.0104 14.5418 15.9078L19.884 21.25L21.25 19.8841L15.9077 14.5419C17.0104 13.1444 17.6695 11.3784 17.6695 9.45974C17.6695 4.92563 13.9939 1.25 9.45977 1.25ZM3.1817 9.45974C3.1817 5.99248 5.99247 3.1817 9.45977 3.1817C12.927 3.1817 15.7378 5.99248 15.7378 9.45974C15.7378 11.1936 15.0361 12.7618 13.8989 13.899C12.7618 15.0362 11.1937 15.7378 9.45977 15.7378C5.99247 15.7378 3.1817 12.9271 3.1817 9.45974Z"
            fill="#242424" />
        </g>
        <defs>
          <clipPath id="clip0_432_534">
            <rect width="20" height="20" fill="white" />
          </clipPath>
        </defs>
      </svg>
      <input type="text" class="pesquisa-text" placeholder="Pesquisar...">
    </div>
  </section>

  <section>
    <h2>Posts recentes</h2>
    <a href="cadastro_post.php" class="botao"> + </a>
  </section>

  <section>
    <div class="post">

    </div>

  </section>
</body>

</html>

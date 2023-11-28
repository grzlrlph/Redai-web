<?php
//chama a classe que realiza o cadastro do usuário
if(isset($_POST['#btn-publicar'])){
    include_once ('back/processa_cadastro_post.php');
}
if (!empty($_POST)){
echo "POST::: <br>";
print_r($_POST);
include_once ('back/processa_cadastro_post.php');
}

$caminho_css = "css/cadastro_post.css";
include 'header.php';
?>

    <main>
      <div>
        <h2 class="title"> Novo Post</h2>
        </div>
      <div class="wrapper">
		<form action="#" method="POST" class="forms">
        <div class="content">
            <div class="campos">
              <label for="titulo" class="label"> Título </label>
              <input type="text" name="titulo" class="inputs">
            </div>    
			<div class="campos">
			  <label for="conteudo" class="label"> Conteúdo </label>
			  <textarea name="conteudo" rows="28" cols="60"> </textarea>
			</div>		
            <div>
              <label for="tags" class="label"> <p>Adicione uma vírgula depois de cada tag</p> </label>
              <!-- <label for="tags" class="label"> Tags </label> -->
              <ul id="tag-ul"><input type="text" spellcheck="false" id="tag-input" name="tags"></ul>
               <!--ul id="tag-ul"><input type="text" name="tags"></ul-->
            </div>
        </div>
        
				<div class="details">
				  <p><span>4</span> tags are remaining</p><button>Remover todas </button>				  
				</div>		  
				<div class="div-btn-enviar-foto">
				  <button type="submit" value="enviar_foto" class="laranja"> Enviar foto </button> 
				</div>
				<div class="div-btn-publicar">
				  <button type="submit" value="publicar" class="cor-principal" id="btn-publicar"> Publicar </button>
				</div>
	    </form>
      </div>
  
      <script src="script-tags.js?v=1.0.5"></script>

    </main>
    
  </body>
</html>
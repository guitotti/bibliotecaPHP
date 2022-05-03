<?php

require 'config.php';
require 'src/Livro.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        $livro = new Livro($mysql);
        $livro->cadastrar($_POST['titulo'] ,$_POST['autor'], $_POST['editora'], $_POST['ano'], $_POST['paginas'], $_POST['categoria']);

        header('Location: cadastrar-livro.php');
        die();

    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Cadastrar livros</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/cadastro.css">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <h1 id="pag-titulo">Cadastro de livro</h1>
    <div class="conteudo">
        <form method="POST" action="cadastrar-livro.php" class="formulario">
        
        <div class="input-div">
            <label>Título:</label>
            <input type="text" name="titulo" id="titulo" required class="formulario__input"><br>
        </div>
        
        <div class="input-div">
            <label>Autor:</label>
            <input type="text" name="autor" id="autor" required class="formulario__input"><br>
        </div>
        
        <div class="input-div">
            <label>Editora:</label>
            <input type="text" name="editora" id="editora" required class="formulario__input"><br>
        </div>

        <div class="input-div">
            <label>Ano de lançamento:</label>
            <input type="number" name="ano" id="ano" required class="formulario__input"><br>
        </div>

        <div class="input-div">
            <label>Quantidade de páginas:</label>
            <input type="number" name="paginas" id="paginas" required class="formulario__input"><br> 
        </div>

        
        <div class="input-div">
            <label>Categoria:</label>
	        <select id="categoria" name="categoria" required>
                <option value="Autoajuda">Autoajuda</option>
                <option value="Biografia">Biografia</option>
                <option value="Cartas">Cartas</option>
                <option value="Ciências da Natureza">Ciências da Natureza</option>
                <option value="Ciências Exatas">Ciências Exatas</option>    
                <option value="Ciências Humanas">Ciências Humanas</option>
		        <option value="Contos">Contos</option>		        
		        <option value="Infantojuvenil">Infantojuvenil</option>
                <option value="Poesia">Poesia</option>
                <option value="Romance">Romance</option>
		        <option value="Tecnologia da Informação">Tecnologia da Informação</option>		        
	        </select>
        </div>

        

        <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
        </form>

        <a href="index.php" id="link" target="_blank">Consultar livros cadastrados</a>
    </div>
   
</body>
</html>
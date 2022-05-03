<?php

    require 'config.php';

    include 'src/Livro.php';
    $livro = new Livro($mysql);
    $livros = $livro->exibirLivrosCadastrados();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Livros cadastrados</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/consulta.css">
</head>

<body>
    <div class="conteudo">
        
        <h1 id="pag-titulo">Livros cadastrados</h1>
                    
            <table class="conteudo__lista">
                <th>Título</th>
                <th>Ano</th>

                <?php foreach($livros as $livro): ?>
                            
                    <tr> 

                        <td><?php echo $livro['titulo']; ?></td>
                            
                        <td><?php echo $livro['ano']; ?> </td>
                        
                    <tr>

                <?php endforeach; ?>
                    
            </table>
                  
            <a id="link" href="cadastrar-livro.php" target="_blank">Cadastrar novo livro</a>
    </div>

</body>

</html>
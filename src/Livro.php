<?php

    class Livro 
    {

        private $mysql;

        public function __construct(mysqli $mysql) 
        {
            $this->mysql = $mysql;
        }

        public function exibirLivrosCadastrados(): array
        {

            $resultado = $this->mysql->query('SELECT titulo, ano FROM livros');
            $livros = $resultado->fetch_all(MYSQLI_ASSOC);

            return $livros;
        }

        public function cadastrar(string $titulo, string $autor, string $editora, int $ano, int $paginas, string $categoria): void
        {
            $cadastraLivro = $this->mysql->prepare('INSERT INTO livros (titulo, autor, editora, ano, paginas, categoria) VALUES (?,?,?,?,?,?);');
            $cadastraLivro->bind_param('sssiis', $titulo, $autor, $editora, $ano, $paginas, $categoria);
            $cadastraLivro->execute();
        }
    }

?>
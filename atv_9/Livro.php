<?php

class Livro {

    public $titulo;
    public $autor;
    public $quantidadePaginas;
    public $quantidadeExemplares;

    public function __construct($titulo, $autor, $quantidadePaginas, $quantidadeExemplares) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->quantidadePaginas = $quantidadePaginas;
        $this->quantidadeExemplares = $quantidadeExemplares;
    }

    public function emprestarLivro() {
        if ($this->quantidadeExemplares > 0) {
            $this->quantidadeExemplares--;
            echo "Livro '{$this->titulo}' emprestado com sucesso!<br>";
        } else {
            echo "Não há exemplares disponíveis de '{$this->titulo}'.<br>";
        }
    }

    public function devolverLivro() {
        $this->quantidadeExemplares++;
        echo "Livro '{$this->titulo}' devolvido com sucesso!<br>";
    }

    public function verificarDisponibilidade() {
        if ($this->quantidadeExemplares > 0) {
            echo "O livro '{$this->titulo}' está disponível.<br>";
        } else {
            echo "O livro '{$this->titulo}' NÃO está disponível.<br>";
        }
    }

    public function alterarQuantidadePaginas($novaQuantidade) {
        $this->quantidadePaginas = $novaQuantidade;
        echo "Quantidade de páginas alterada para {$novaQuantidade}.<br>";
    }

    public function exibirInformacoes() {
        echo "<hr>";
        echo "Título: {$this->titulo}<br>";
        echo "Autor: {$this->autor}<br>";
        echo "Quantidade de páginas: {$this->quantidadePaginas}<br>";
        echo "Exemplares disponíveis: {$this->quantidadeExemplares}<br>";
    }

    public function compararPaginas($outroLivro) {

        if ($this->quantidadePaginas > $outroLivro->quantidadePaginas) {

            echo "O livro '{$this->titulo}' possui mais páginas que '{$outroLivro->titulo}'.<br>";

        } elseif ($this->quantidadePaginas < $outroLivro->quantidadePaginas) {

            echo "O livro '{$outroLivro->titulo}' possui mais páginas que '{$this->titulo}'.<br>";

        } else {

            echo "Os dois livros possuem a mesma quantidade de páginas.<br>";
        }
    }
}

?>
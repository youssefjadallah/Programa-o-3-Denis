<?php

require_once "Livro.php";

$livro1 = new Livro("Dom Casmurro", "Machado de Assis", 256, 3);

$livro2 = new Livro("O Hobbit", "J.R.R. Tolkien", 320, 2);

$livro3 = new Livro("1984", "George Orwell", 280, 0);


echo "<h2>Empréstimos e Devoluções</h2>";

$livro1->emprestarLivro();

$livro3->emprestarLivro();

$livro2->devolverLivro();


echo "<h2>Disponibilidade</h2>";

$livro1->verificarDisponibilidade();

$livro3->verificarDisponibilidade();


echo "<h2>Alterando páginas</h2>";

$livro1->alterarQuantidadePaginas(300);


echo "<h2>Comparação de páginas</h2>";

$livro1->compararPaginas($livro2);


echo "<h2>Informações Atualizadas</h2>";

$livro1->exibirInformacoes();

$livro2->exibirInformacoes();

$livro3->exibirInformacoes();

?>
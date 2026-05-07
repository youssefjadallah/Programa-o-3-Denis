<?php

require_once "Funcionario.php";

// Instanciando 3 funcionários
$funcionario1 = new Funcionario(1, "Carlos", 3000, 160);
$funcionario2 = new Funcionario(2, "Mariana", 4500, 180);
$funcionario3 = new Funcionario(3, "João", 2500, 150);

// Função para processar os dados do funcionário
function processarFuncionario($funcionario, $percentualAumento) {

    echo "<h3>===== DADOS INICIAIS =====</h3>";
    $funcionario->exibirDados();

    echo "Salário por hora: R$ " . 
        number_format($funcionario->calcularSalarioHora(), 2, ',', '.') . "<br>";

    echo "Aplicando aumento de {$percentualAumento}%...<br>";

    $funcionario->aumentarSalario($percentualAumento);

    echo "<h3>===== DADOS ATUALIZADOS =====</h3>";
    $funcionario->exibirDados();

    echo "<hr>";
}

// Executando para cada funcionário
processarFuncionario($funcionario1, 10);
processarFuncionario($funcionario2, 15);
processarFuncionario($funcionario3, 20);

?>
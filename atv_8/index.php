<?php

require_once "Veiculo.php";

$veiculo1 = new Veiculo("Toyota", "Corolla", 2020, 20, 12);
$veiculo2 = new Veiculo("Honda", "Civic", 2019, 15, 10);
$veiculo3 = new Veiculo("Ford", "Ka", 2021, 10, 14);

function processarVeiculo($veiculo, $litrosAbastecidos) {

    echo "<h3>===== INFORMAÇÕES INICIAIS =====</h3>";
    $veiculo->exibirInformacoes();

    echo "Abastecendo {$litrosAbastecidos} litros...<br>";

    $veiculo->abastecer($litrosAbastecidos);

    echo "Autonomia do veículo: " . 
        number_format($veiculo->calcularAutonomia(), 2, ',', '.') . " km<br>";

    echo "<h3>===== INFORMAÇÕES ATUALIZADAS =====</h3>";
    $veiculo->exibirInformacoes();

    echo "<hr>";
}

processarVeiculo($veiculo1, 15);
processarVeiculo($veiculo2, 20);
processarVeiculo($veiculo3, 12);

?>
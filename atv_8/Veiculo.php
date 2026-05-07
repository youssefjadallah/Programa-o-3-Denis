<?php

class Veiculo {
    private $marca;
    private $modelo;
    private $ano;
    private $combustivel;
    private $consumoMedio;

    public function __construct($marca, $modelo, $ano, $combustivel, $consumoMedio) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->combustivel = $combustivel;
        $this->consumoMedio = $consumoMedio;
    }

    public function abastecer($litros) {
        $this->combustivel += $litros;
    }

    public function calcularAutonomia() {
        return $this->combustivel * $this->consumoMedio;
    }

    public function exibirInformacoes() {
        echo "Marca: " . $this->marca . "<br>";
        echo "Modelo: " . $this->modelo . "<br>";
        echo "Ano: " . $this->ano . "<br>";
        echo "Combustível: " . number_format($this->combustivel, 2, ',', '.') . " litros<br>";
        echo "Consumo Médio: " . $this->consumoMedio . " km/l<br>";
    }
}

?>
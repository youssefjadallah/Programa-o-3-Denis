<?php

class Funcionario {
    private $codigo;
    private $nome;
    private $salario;
    private $cargaHorariaMensal;

    public function __construct($codigo, $nome, $salario, $cargaHorariaMensal) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->salario = $salario;
        $this->cargaHorariaMensal = $cargaHorariaMensal;
    }

    // Calcula o salário por hora
    public function calcularSalarioHora() {
        return $this->salario / $this->cargaHorariaMensal;
    }

    // Aumenta o salário com base em um percentual
    public function aumentarSalario($percentual) {
        $this->salario += $this->salario * ($percentual / 100);
    }

    // Exibe os dados do funcionário
    public function exibirDados() {
        echo "Código: " . $this->codigo . "<br>";
        echo "Nome: " . $this->nome . "<br>";
        echo "Salário: R$ " . number_format($this->salario, 2, ',', '.') . "<br>";
        echo "Carga Horária Mensal: " . $this->cargaHorariaMensal . " horas<br>";
    }
}

?>
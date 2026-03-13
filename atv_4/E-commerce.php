<?php

$valor = $_POST['txtcompra'];
$cliente = $_POST['radioDefault'];

$desconto = 0;
$frete = false;

if ($cliente == "Comum") {

    if ($valor > 500) {
        $desconto = $valor * 0.05;
    }
} elseif ($cliente == "VIP") {

    $desconto = $valor * 0.10;

    if ($valor > 1000) {
        $frete = true;
    }
} else {

    $desconto = $valor * 0.15;
    $frete = true;
}

$valorFinal = $valor - $desconto;

?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Resultado Compra</title>

</head>

<body>

    <div class="container mt-5">

        <div class="card text-center">

            <div class="card-header">
                Sistema de Descontos
            </div>

            <div class="card-body">

                <h5 class="card-title">Resumo da Compra</h5>

                <p>Valor da compra:
                    <span class="badge bg-primary">
                        R$ <?php echo number_format($valor, 2, ",", "."); ?>
                    </span>
                </p>

                <p>Desconto:
                    <span class="badge bg-warning text-dark">
                        R$ <?php echo number_format($desconto, 2, ",", "."); ?>
                    </span>
                </p>

                <p>Valor final:
                    <span class="badge bg-success">
                        R$ <?php echo number_format($valorFinal, 2, ",", "."); ?>
                    </span>
                </p>

                <?php
                if ($frete) {
                    echo '<span class="badge bg-danger">Frete Grátis</span>';
                }
                ?>

            </div>

        </div>

    </div>

</body>

</html>
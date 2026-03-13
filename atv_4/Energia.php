<?php

$kwh = $_POST['txtkwh'];
$tipo = $_POST['radioDefault'];

if ($tipo == "residencial") {

    if ($kwh <= 500) {
        $valor = $kwh * 0.40;
    } else {
        $valor = $kwh * 0.65;
    }
} elseif ($tipo == "comercial") {

    if ($kwh <= 1000) {
        $valor = $kwh * 0.55;
    } else {
        $valor = $kwh * 0.60;
    }
} else {

    if ($kwh <= 5000) {
        $valor = $kwh * 0.55;
    } else {
        $valor = $kwh * 0.60;
    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Resultado Energia</title>

</head>

<body>

    <div class="container mt-5">

        <div class="card text-center">

            <div class="card-header">
                Calculadora de Energia Elétrica
            </div>

            <div class="card-body">

                <h5 class="card-title">Resultado da Conta</h5>

                <p>Tipo de instalação:
                    <span class="badge bg-info"><?php echo $tipo; ?></span>
                </p>

                <p>Consumo:
                    <span class="badge bg-primary"><?php echo $kwh; ?> kWh</span>
                </p>

                <p>Valor da conta:
                    <span class="badge bg-success">
                        R$ <?php echo number_format($valor, 2, ",", "."); ?>
                    </span>
                </p>

            </div>

        </div>

    </div>

</body>

</html>
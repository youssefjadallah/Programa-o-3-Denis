<?php

$altura = $_POST['txtaltura'];
$peso = $_POST['txtpeso'];

$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    $classificacao = "Abaixo do peso";
    $alerta = "alert-warning";
} elseif ($imc < 25) {
    $classificacao = "Peso ideal";
    $alerta = "alert-success";
} elseif ($imc < 30) {
    $classificacao = "Sobrepeso";
    $alerta = "alert-info";
} elseif ($imc < 40) {
    $classificacao = "Obesidade";
    $alerta = "alert-danger";
} else {
    $classificacao = "Obesidade mórbida";
    $alerta = "alert-dark";
}

?>

<!DOCTYPE html>
<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container mt-5">

        <div class="alert <?php echo $alerta; ?>" role="alert">

            <h4>Resultado do IMC</h4>

            <p><strong>Peso:</strong> <?php echo $peso; ?> kg</p>
            <p><strong>Altura:</strong> <?php echo $altura; ?> m</p>
            <p><strong>IMC:</strong> <?php echo number_format($imc, 2); ?></p>

            <hr>

            <p><strong>Classificação:</strong> <?php echo $classificacao; ?></p>

        </div>

    </div>

</body>

</html>
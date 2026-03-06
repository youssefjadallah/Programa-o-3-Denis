<?php

$dias = $_POST['txtdias'];
$km = $_POST['txtdistancia'];
$tipo = $_POST['radioDefault'];

$total = 0;

if ($tipo == "popular") {

    $total += $dias * 90;

    if ($km <= 100) {
        $total += $km * 0.20;
    } else {
        $total += $km * 0.10;
    }
} else if ($tipo == "luxo") {

    $total += $dias * 150;

    if ($km <= 200) {
        $total += $km * 0.30;
    } else {
        $total += $km * 0.25;
    }
}
?>

<!DOCTYPE html>
<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container mt-5">

        <div class="alert alert-info" role="alert">

            <h4>Resultado do Calculo</h4>

            <p><strong>Dias alugado:</strong> <?php echo $dias; ?> dias</p>
            <p><strong>KM rodados:</strong> <?php echo $km; ?> km</p>
            <p><strong>Tipo de veículo:</strong> <?php echo $tipo; ?></p>

            <hr>

            <p><strong>Total:</strong> <?php echo "R$ " . number_format($total, 2, ",", "."); ?></p>

        </div>

    </div>

</body>

</html>
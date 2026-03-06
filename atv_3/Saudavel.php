<?php

$horas = $_POST['txthoras'];

if ($horas <= 10) {
    $pontos = $horas * 2;
} elseif ($horas <= 20) {
    $pontos = $horas * 5;
} else {
    $pontos = $horas * 10;
}

$dinheiro = $pontos * 0.05;

?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Resultado</title>

</head>

<body>

    <div class="container mt-5">

        <div class="card text-center">

            <div class="card-header">
                Programa Vida Saudável
            </div>

            <div class="card-body">

                <h5 class="card-title">Resultado da Atividade Física</h5>

                <p>Horas de atividade: <span class="badge bg-primary"><?php echo $horas; ?></span></p>

                <p>Pontos conquistados: <span class="badge bg-success"><?php echo $pontos; ?></span></p>

                <p>Dinheiro ganho: <span class="badge bg-warning text-dark">
                        R$ <?php echo number_format($dinheiro, 2, ",", "."); ?>
                    </span></p>

            </div>

        </div>

    </div>

</body>

</html>
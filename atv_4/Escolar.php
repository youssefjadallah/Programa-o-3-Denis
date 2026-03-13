<?php

$nota1 = $_POST['txtNota1'];
$nota2 = $_POST['txtNota2'];
$nota3 = $_POST['txtNota3'];
$frequencia = $_POST['txtfrequencia'];

$media = ($nota1 + $nota2 + $nota3) / 3;

if ($frequencia < 75) {
    $status = "Reprovado por Faltas";
    $cor = "danger";
} elseif ($media >= 7) {
    $status = "Aprovado";
    $cor = "success";
} elseif ($media >= 4) {
    $status = "Recuperação";
    $cor = "warning";
} else {
    $status = "Reprovado por Nota";
    $cor = "danger";
}

?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Resultado Escolar</title>

</head>

<body>

    <div class="container mt-5">

        <div class="card text-center">

            <div class="card-header">
                Sistema de Aprovação Escolar
            </div>

            <div class="card-body">

                <h5 class="card-title">Resultado do Aluno</h5>

                <p>Média: <span class="badge bg-primary">
                        <?php echo number_format($media, 2, ",", "."); ?>
                    </span></p>

                <p>Status: <span class="badge bg-<?php echo $cor; ?>">
                        <?php echo $status; ?>
                    </span></p>

            </div>

        </div>

    </div>

</body>

</html>
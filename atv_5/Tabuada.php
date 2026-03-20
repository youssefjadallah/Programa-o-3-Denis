<?php
$numero = $_GET['numero'];
$tabuada = [];

if ($numero !== null) {
    for ($i = 1; $i <= 10; $i++) {
        $tabuada[] = "$numero x $i = " . ($numero * $i);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Tabuada</title>
</head>

<body>

    <div class="container mt-5">
        <div class="card text-center">

            <div class="card-header">
                Gerador de Tabuada
            </div>

            <div class="card-body">

                <h5 class="card-title">Resultado</h5>

                <?php if ($numero !== null): ?>
                    <p>Número selecionado:
                        <span class="badge bg-primary"><?php echo $numero; ?></span>
                    </p>

                    <p>Tabuada:</p>
                    <ul class="list-group mb-3">
                        <?php
                        foreach ($tabuada as $linha) {
                            echo "<li class='list-group-item'>$linha</li>";
                        }
                        ?>
                    </ul>
                <?php else: ?>
                    <div class="alert alert-info">
                        Nenhum número foi selecionado. Por favor, insira um número no formulário.
                    </div>
                <?php endif; ?>

            </div>

        </div>
    </div>

</body>

</html>
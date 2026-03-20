<?php

$nome = $_POST['Nome'];
$valorTotal = 20.00;

$precos = [
    "Bacon" => 3.00,
    "Cheddar Cremoso" => 2.50,
    "Cebola Caramelizada" => 2.00,
    "Hambúrguer Extra" => 5.00
];

$adicionaisSelecionados = [];

if (isset($_POST['adicionais'])) {
    foreach ($_POST['adicionais'] as $item) {
        $valorTotal += $precos[$item];
        $adicionaisSelecionados[] = $item;
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Pedido</title>
</head>

<body>

    <div class="container mt-5">
        <div class="card text-center">

            <div class="card-header">
                Pedido
            </div>

            <div class="card-body">

                <h5 class="card-title">Resumo do Pedido</h5>

                <p>Nome:
                    <span class="badge bg-primary">
                        <?php echo $nome; ?>
                    </span>
                </p>

                <p>Adicionais:</p>

                <ul class="list-group mb-3">
                    <?php
                    if (!empty($adicionaisSelecionados)) {
                        foreach ($adicionaisSelecionados as $item) {
                            echo "<li class='list-group-item'>$item</li>";
                        }
                    } else {
                        echo "<li class='list-group-item'>Nenhum adicional</li>";
                    }
                    ?>
                </ul>

                <p>Total:
                    <span class="badge bg-success">
                        R$ <?php echo number_format($valorTotal, 2, ",", "."); ?>
                    </span>
                </p>

            </div>

        </div>
    </div>

</body>

</html>
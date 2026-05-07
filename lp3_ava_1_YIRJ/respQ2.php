<?php

$nomes = ["ada", "Alan", "Mark"];

$campofigura = $_GET['campofigura'];

if ($_GET['campofigura'] != null) { ?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Avaliação 1</title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <?php
                if ($campofigura === "ada" || $campofigura === "Alan" || $campofigura === "Mark") {
                ?>
                    <div class="alert alert-success mt-3">Você pesquisou por: <?= $campofigura ?>. e ele esta no banco</div>
                <?php
                }
                ?>

                <?php
                if ($campofigura !== "ada" || $campofigura === "Alan" || $campofigura ===  "Mark") {
                ?>
                    <div class="alert alert-success mt-3">Você pesquisou por: <?= $campofigura ?>. e não foi encontrado. os que estão são ada,Alan e Mark</div>
                <?php
                }
                ?>

                <a href="index.php" class="btn btn-secondary">Voltar</a>
            </div>
        </div>

        <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>

<?php
}
?>
<?php
if ($_GET['campofigura'] == null) { ?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Avaliação 1</title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="alert alert-info mt-3">digite um nome para realiza a pesquisa</div>

                <a href="index.php" class="btn btn-secondary">Voltar</a>
            </div>
        </div>

        <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>

<?php
}
?>
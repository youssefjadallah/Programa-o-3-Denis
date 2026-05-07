<?php

$workshops = $_POST['Workshops'] ?? [];
$nome = $_POST['campoNome'];
$email = $_POST['campoEmail'];
$perfil = $_POST['Perfil'];
$tamanho = $_POST['radioDefault'];

?>

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
                <div class="col-4 mt-3">
                    <div class="card">
                        <div class="card-header">
                            Seja muito bem vindo!
                            detalhes da inscrição
                        </div>
                        <div class="card-body">
                            <p>Cliente: <?= $nome ?></p>
                            <p>E-mail: <?= $email ?></p>
                            <p>tamanho da camisa: <?= $tamanho ?></p>
                            <p>Perfil: <?= $perfil ?></p>
                            <p> Workshops:</p>
                            <?php if ($workshops != null){?>
                            <?php foreach ($workshops as $item) {?>
                                <ul>
                                    <li><?= $item ?></li>
                                </ul>
                            <?php }} 
                            else{?>
                                <p> Não preenchido</p>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="card-footer">
                            <a href="index.php" class="btn btn-secondary btn-sm">Voltar</a>
                        </div>
                    </div>
                </div>



            </div>
        </div>

        <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
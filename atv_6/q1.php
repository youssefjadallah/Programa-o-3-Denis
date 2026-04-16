<?php

$nome = $_POST['campoNome'] ?? '';
$email = $_POST['em'] ?? '';
$categoria = $_POST['tp'] ?? '';
$linguagem = $_POST['cm'] ?? '';
$areas = $_POST['opc'] ?? [];

$areasSelecionadas = "";

// Monta a lista corretamente com <li>
foreach ($areas as $area) {
    if ($area == "laravel") {
        $areasSelecionadas .= "<li>Desenvolvimento Web</li>";
    }
    if ($area == "boot") {
        $areasSelecionadas .= "<li>Inteligência Artificial</li>";
    }
    if ($area == "java") {
        $areasSelecionadas .= "<li>Banco de Dados</li>";
    }
    if ($area == "comp") {
        $areasSelecionadas .= "<li>Segurança da Informação</li>";
    }
}

// Categoria
switch ($categoria) {
    case "1":
        $categoria = "Iniciante";
        break; 
    case "2":
        $categoria = "Intermediário";
        break;
    case "3":
        $categoria = "Avançado";
        break;
}

// Linguagem
switch ($linguagem) {
    case "p":
        $linguagem = "Python";
        break;
    case "m":
        $linguagem = "Java";
        break;
    case "g":
        $linguagem = "PHP";
        break;
    case "gg":
        $linguagem = "C++";
        break;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container mt-4">
    <div class="card col-6">
        <div class="card-header">
            Bem-vindo(a)!
        </div>
        <div class="card-body">
            <h5>Nome: <?= $nome ?></h5>
            <h5>Email: <?= $email ?></h5>
            <h5>Categoria: <?= $categoria ?></h5>
            <h5>Linguagem: <?= $linguagem ?></h5>

            <h5>Áreas selecionadas:</h5>
            <ul>
                <?= $areasSelecionadas ?>
            </ul>

        </div>
        <div class="card-footer">
            <a href="index.php" class="btn btn-secondary">Voltar</a>
        </div>
    </div>
</div>
</body>
</html>
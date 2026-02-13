<!DOCTYPE html>
<html>
<head>
    <title>Meu Primeiro PHP</title>
</head>
<body>

<h1>Bem-vindo ao meu sistema</h1>

<a href="cadastro.php">Ir para Cadastro</a>

<form method="POST">
    <label>Digite seu nome:</label>
    <input type="text" name="nome">
    <button type="submit">Enviar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeDigitado = $_POST["nome"];
    echo "<h2>Bem-vindo, $nomeDigitado!</h2>";
}
?>


<h1>LP3 Aula 3</h1>

    <?php

        for($i = 0; $i <= 10; $i+=2){
            echo "$i é par<br>";
        }

        $i=1;

        while($i<=10){
            echo "$i é impar<br>";
            $i+=2;
        }

    ?>

    <h4>Multiplos de 3 entre 0 e 100</h4>
    <ul>
        <?php
            for($i = 0; $i <= 100; $i += 3){
        ?>
            <li>Número: <?php echo $i; }?></li>
    </ul>

    <?php
    for($i = 100; $i >= 0; $i-=5){
            echo "$i <br>";
        }
    ?>

    <?php
    $f=0;
    $c=0;
    for($i = 14; $i <= 72; $i++){

        $f= $f + $i;
        $c++;

    }

        $f = $f / $c;
        echo "<br><br>$f <br><br>";

    ?>

    <?php
    $f=0;
    for($i = 30; $i >= 1; $i--){

            if ($i % 4 == 0) {
                echo "[$i] <br>";
            } else{
                echo "$i <br>";
            }
        }
    ?>


</body>
</html>
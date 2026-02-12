<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3 Aula 2</title>
</head>
<body>
    <h1>LP3 Aula 2</h1>

    <?php

        $xuxu = 6;
        echo "$xuxu" . "<br>";
        echo '$xuxu' . "<br>";
        echo 4 . "<br>";
        echo $xuxu . "<br>";

    ?>

    <h3>Lista</h3>
    <ul>
        <?php
            if($xuxu % 2 == 0){
                $resp = "par";
            }
            else{
                $resp = "impar";
            }
        ?>
        <li>A variável xuxu é <?php echo $resp;?> </li>

        <?php if($resp == "par"){ ?>
            <li>A variável xuxu é par </li>
            <li>Churrasco</li>
        <?php } ?>

        <?php if($resp == "impar"){ ?>
            <li>A variável xuxu é impar </li>
        <?php } ?>

    </ul>
</body>
</html>
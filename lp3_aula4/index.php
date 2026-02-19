<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3 Aula 4</title>
</head>
<body>
    <h1>LP3 Aula 4</h1>
    <h4>Exercício 1</h4>

<?php
for($i = -10; $i <= 10; $i+=1){
    echo "$i ";
}
?>

<h4> Exercício 2 </h4>
    <?php
    $b = 0;
    $soma = 0;
    while($b <= 500){
        
    if($b % 2 == 1){
        $soma=$b+$soma;
    }

    $b+=3;
        
}
    echo "$soma";

?>

<h4> Exercício 3 </h4>

<?php
for($i = 100; $i >= 0; $i-=10){
    echo "$i ";
}
?>

<h4> Exercício 4 </h4>
<?php
for($i = 100; $i >= 0; $i-=1){
    if($i % 5 == 0 && $i % 2 == 1){
        echo "[$i] ";
    }else{
        echo "$i ";
    }
    
}
?>

<h4> Exercício 5 </h4>
<?php
for($i = 150; $i >= 0; $i-=5){
    echo "$i ";
}
?>

<h4> Exercício 6 </h4>
<?php
    $b = 150;
    while($b >= 0){
    echo "$b " ;
    $b-=5; 
}
?>

</body>
</html>
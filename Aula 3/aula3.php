<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores </title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>

<body>
    <div>
    <?php 
     $n1 = $_GET["a"];/*paramentros para busca os valores na URL DO SITE sempre com letras grandes e digital valores na URL*/
     $n2 = $_GET["b"];   
    echo "<h2> Valores recebidos: $n1 e $n2 </h2>";


    /*$n1= 2;
    $n2= 1;*/
    $m = ($n1 + $n2)/2;
    echo "A soma vale ". ($n1+$n2);
    echo "<br/> A subtração vale " . ($n1-$n2);
    echo "<br/> A multiplicação vale ". ($n1*$n2);
    echo "<br/> A divisão vale " .($n1/$n2);
    echo "<br/> O modulo vale " .($n1%$n2);
    echo "<br/> A média e $m";
    ?>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Funções Aritmeticas em PHP </title>
 
</head>

<body>
    <div>
        <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo "<h2> Valores recebidos : $v1 e $v2 </h2>";
        echo "<br/> O valor absoluto de $v2 e " .abs($v2);/*para transfomar numero negativos em positivo com Funçao ABS*/
        echo "<br/> o valor de $v1<sup>$v2</sup> e " .pow($v1, $v2 );/*Potenciação*/ 
        echo "<br/>A raiz de $v1 e " .sqrt($v1);/*para fazer RAIZ QUADRADA*/
        echo "<br/> O valor de $v2 arredondado e " . round($v2);// tem O OPÇOES DE  CEILL(SEMPRE ARREDONDA PARA CIMA. FLOOR PARA BAIXO OS NUMEROS)
        echo "<br/>A parte inteira de $v2 e " .intval($v2);//vai truca numero sempre vai pega parte inteira
        echo "<br/> O valor de $v1 em moeda e R$" .number_format($v1, 2, ",",".");
        ?>

    </div>
</body>

</html>
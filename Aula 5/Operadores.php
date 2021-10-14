<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operadores em PHP </title>

</head>

<body>
    <div>
        <?php
        $preco = $_GET["p"];
        echo "O preco do produto e R$ $preco";
        //$preco += $preco* 10/100;// modelo mais pratico de declara operadores $preco +=
        echo "<br/> e novo preço com 10% de aumento sera R$ $preco";
        $preco -= $preco * 10/100;
        echo "<br/> e novo preço com 10% de desconto sera de R$ $preco";
        ?>
        <br> <br>
        <?php // para fica com Valor de moedas formataçao
        $preco = $_GET["p"];
        echo "O preço do produto e R$" .number_format($preco, 2);
        $preco += $preco * 10/100;
        echo "<br/> O novo preço com 10% de aumento sera de R$ " .number_format($preco, 2);

        ?>

    </div>
</body>

</html>
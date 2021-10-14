<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operadores iguais identicos</title>

</head>

<body>
    <div>
        <?php
        $a = 3;
        $b = "3";
        $r = $a == $b ? "SIM": "NAO"; #operação para sabe ser são iguais
        echo "As variaveis A e b são iguais? $r";

        ?>
        <?php
        $a = 3;
        $b = "3";
        $r = $a === $b ? "SIM" : "NAO";# usado operadores identicos ===
        echo "<br/>As variaveis A e B são indenticas? $r";



        ?>

    </div>
</body>

</html>
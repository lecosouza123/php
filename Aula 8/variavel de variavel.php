<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Variavel de Variavel </title>

</head>

<body>
    <div>
        <?php
        $x = "site";# criação da variavel
        $$x = "completo"; # aki variavel recebeu nova variavel
        echo  "O conteúdo da variável X e $x";
        echo "</br>A variável SITE criada recebeu  o valor de ." .$site;



        ?>


    </div>
</body>

</html>
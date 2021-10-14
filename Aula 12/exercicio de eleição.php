<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Eleição</title>

</head>

<body>
    <div>
        <?php
        $ano = $_GET["an"];
        $idade = 2021 - $ano;
        echo "Quem nasceu em $ano tem idade de $idade anos.";
        $tipo = ($idade>=18 && $idade<65) ? "OBRIGATORIO":"NAO OBRIGATORIO";
        echo "<br/> O meu voto e ? $tipo";
       
        ?>

    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Incremento em PHP </title>

</head>

<body>
    <div>
        <?php
        $atual =$_GET["aa"];
        echo "O ano atual e " .$atual++;//aki eu coloquei incremento
        echo "<br/> O Ano com incremento e $atual"; //e nessa linha que gerar o incremento.
        
        echo "<br/> O Ano e $atual e ano com decremento sera " .--$atual; # aki gerou escrita com decremento


        ?>
        
    </div>
</body>

</html>
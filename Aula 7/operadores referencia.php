<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Relacional em PHP </title>

</head>

<body>
    <div>
        <?php # aqui variveis recebe valor normal
        $a = 3;
        $b = $a;
        $b += 5;
        echo "A variavel A vale $a";
        echo "</br>A variavel B vale $b";
        ?>
        <br> <br>

        <?php #aqui varivel A vai receber valor de B como referencial E USA SEMPRE  &
        $a = 3;
        $b = &$a;
        $b +=5;
        echo "A variavel A vale $a";
        echo "</br> A variavel B vale $b";
        ?>


    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Nota do aluno</title>

</head>

<body>
    <div>
        <?php
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1 + $nota2)/2;
        echo "A media entre $nota1 e $nota2 e $m<br/>";
        $r = ($m >= 7) ? "Aprovado": "Reprovado"; 
        echo "O aluno está ? $r";
        echo "<br/>A situação do Aluno e ". (($m<6) ?"REPROVADO":"APROVADO");#posso fazer assim também


?>
        

    </div>
</body>

</html>
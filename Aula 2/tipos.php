<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de variaves</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
    <?php
        $n = 4;/*Variaveis sempre escrista com $ na frente*/ 
        $no ="Hercules";/* posso coloca INT ou qualquer outra variave EXEMPLO (string) para força ou (int) na frente do nome*/ 
        $n =4.5;
        echo $n;
        ?>
        <br>

        <?php
        $nome = "Ana";
        $idade = 18;
        echo $nome. " tem ". $idade. " anos !";
        ?>

        <br>

        <?php
        $nome = "Ana";
        $idade = 20;
        echo "$nome tem $idade anos!"; /*POSSO ESCREVER ASSIM TAMBÉM*/
        ?>        
       

     
   
    </div>
</body>
</html>
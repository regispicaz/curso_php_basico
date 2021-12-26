<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores | Aribuição</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
        
            //Referenciando variáveis
            $a = $_GET["a"];
            $b = &$a;//A referencia se dá através do operador & antes da variavel
            $b += 10;
            echo "</br>Referenciando o valor de a $a em variavel b $b ";
        
        ?>
    </div>
    
</body>
</html>
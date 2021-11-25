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

            //Variável de Variáveis
            $site = "regispicaz.dev";
            $$site = "developer";//Operador de variável $$
            echo "</br>O site é $site e o conteúdo é $developer";//$developer é uma variável de variável
            $h = "abc";
            $$h = "def";
            echo "</br>O conteúdo da variável h é $h";
            echo "</br>O conteúdo da Variável de Variavel def é $abc";//$abc é uma variável de variável
        ?>
    </div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritméticas | PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            // Funções aritméticas
            $v1 = $_GET ["x"]; // Recebe o valor da variável x via url
            $v2 = $_GET ["y"]; // Recebe o valor da variável y via url
            echo "Valores recebidos : $v1 e $v2 </br> ";
            echo "O valor absouto de $v2 é ".abs($v2); // Função abs()
            echo "</br>O valor de $v1<sup>$v2</sup> é ".pow($v1, $v2); // Função pow()
            echo "</br>A raiz de $v1 é ".sqrt($v1); // Função sqrt()
            echo "</br>O valor arredondado de $v2 é ".round($v2); // Função round() | ceil() arrendonda para cima | floor() arrendonda para baixo
            echo "</br>A parte inteira de $v2 é ".intval($v2); // Função intval() 
            echo "</br>O valor de $v1 em moeda é R$ ".number_format($v1, 2, ",", "."); // Função number_format()
            
        ?>
    </div>
</body>
</html>
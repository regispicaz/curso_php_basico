<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos | PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            // Operadores aritméticos
            $n1 = $_GET["a"];//Get pega o valor da url e coloca na variavel ex a=XX&b=YY
            $n2 = $_GET["b"];
            $soma = $n1 + $n2;
            $subtracao = $n1 - $n2;
            $media = ($n1 + $n2) / 2;

            echo "<h1>Valores da url são $n1 e $n2<br></h1>";
            echo "A soma entre $n1 e $n2 é igual a $soma";
            echo "</br>A subtração entre $n1 e $n2 é igual a $subtracao";
            echo "</br>A multiplicação entre $n1 e $n2 é igual a ".($n1 * $n2);
            echo "</br>A divisão entre $n1 e $n2 é igual a ".($n1/$n2);
            echo "</br>O modulo entre $n1 e $n2 é igual a ".($n1%$n2);
            echo "</br>A média arimética entre $n1 e $n2 é igual a $media";
        ?>
    </div>
</body>
</html>
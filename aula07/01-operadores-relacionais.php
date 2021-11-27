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
            /*Operadores Relacionais
           > Maior que
           < Menor que
           >= Maior ou igual
           <= Menor ou igual
           == Igual
           === Igual e do mesmo tipo "Identico"
           <> Diferente
           != Diferente
           !== Diferente e do mesmo tipo
           */
 
           /*Operador Ternarios
           */
           $a = 3;
           $b = 15;
           $maior = $a > $b ? $a : $b;//Se a for maior que b, retorna a, senão retorna b
           echo "O valor maior entre $a e $b é : $maior";

           $r = $a > $b ? $a + $b : $a - $b;
           echo "</br>O valor de R é $r </br>";
           
           echo "</br>Exercícios</br>";

           //Exercícios:
           $n1 = $_GET["a"];//Pegando o valor da variável a da URL
           $n2 = $_GET["b"];
           $tipo = $_GET["op"];
           echo "</br>Os valores são $n1 e $n2 </br>";
           $r = ($tipo == "s") ? $n1 + $n2 : $n1 - $n2;//Se tipo for igual a s, soma, senão subtrai
           echo "O resultado de R é $r";


           
           


        
        ?>
    </div>
    
</body>
</html>
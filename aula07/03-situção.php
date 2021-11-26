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
 
           /*Operador Unário
           */
           
           //Exercícios:
           $n1 = 10;
           $n2 = 2;
           $n3 = 0;
           $n4 = 7;
           $media = ($n1 + $n2 + $n3 + $n4) / 4;
           //$situacao = ($media >= 7 ) ? "Aprovado":"Reprovado";
           echo "O aluno obteve Média $media portanto foi ".(($media >7)?"Aprovado":"Reprovado");



           
           


        
        ?>
    </div>
    
</body>
</html>
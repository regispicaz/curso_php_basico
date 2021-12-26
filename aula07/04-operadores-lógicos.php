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
           /*Operador Lógicos
           && - E - AND
           || - Ou - OR
           ! - Não - NOT
           xor - ou exclusivo - XOR 

           */
           
           //Exercícios:
            $ano_nas = $_GET["nas"];
            $ano_atual = $_GET["atual"];
            $idade = $ano_atual - $ano_nas;
            echo "Vocẽ tem $idade anos logo seu voto é ".(($idade >= 18 && $idade <= 64)? "obrigatório." : "voluntário.");//Operador Lógico "E"



           
           


        
        ?>
    </div>
    
</body>
</html>
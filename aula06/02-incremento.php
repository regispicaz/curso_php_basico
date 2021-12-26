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
            $atual = $_GET["aa"];//$_GET["aa"] = $_GET["aa"] + 1;
            echo "O ano atual é $atual e o ano anterior é ". --$atual;
            $anoNascimento = $_GET["an"];//$_GET["an"] = $_GET["an"] + 1;
            echo "</br>O ano de Nascimento é $anoNascimento";
            $idade = $atual + 1 - $anoNascimento;//$_GET["aa"] = $_GET["aa"] + 1;
            echo "</br>A idade atual é $idade";
        
        ?>
    </div>
    
</body>
</html>
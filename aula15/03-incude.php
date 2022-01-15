<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        //Caso o arquivo não seja encontrado será mostrada menságem de erro na função não encontrada e o programa segue o fluxo até o final.
        include "funcoes.php";//chamando script em arquivo externo
        echo "<h1>Testando novas funções!</h1>";
        ola();
        mostraValor(1505);
        echo "<h2>Finalizando Programa.</h2>";
    ?>
</div>
</body>
</html>
 
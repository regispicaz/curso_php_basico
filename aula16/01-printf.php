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
      $prod = "Leite";
      $vlr = 3.3;
      
      printf("O %s custa R$ %.2f", $prod, $vlr);// $s (formata como STRING), $f (formata como flout, podendo formater o número de casas decimais com .2 para duas casas por exemplo)
    ?>
</div>
</body>
</html>
 
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
    //a função print_r é boa para realização de testes.
      $x[0] = 10;
      $x[2] = 5;
      $x[5] = 3;
      $x[6] = 12;
      print_r($x);//Mostra que é um vetor(Array) com as posições e valores respectivos.
      echo "<br/>";

      $y = array(10, 2, 5, 3, 13);//Cria um vetor com menos código
      print_r($y);
      echo "<br/>";
      var_dump($y);//Função parecida com print_r
      echo "<br/>";
      var_export($y);//Função parecida com print_r
    ?>
</div>
</body>
</html>
 
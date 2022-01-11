<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
	h1 { font: 20pt Arial; }
  </style>
</head>
<body>
<div>
    <?php
      $n = isset($_GET["num"])?($_GET["num"]):'1';
      echo "Mostrando a TABUADA de $n</br>";
      for($c=1; $c<= 10; $c++){
        $res = $n * $c;
          echo "$n X $c = $res </br>";
      }
    ?>
	<br/>
	<a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 
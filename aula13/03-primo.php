<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
	h1 { font: 20pt Arial; }
	h2 { font: 18pt Arial; }
  </style>
</head>
<body>
<div>
    <?php
      $n = ($_GET["num"])?($_GET["num"]):'1';
      echo $n;
      for($cnt=$n; $cnt<$n; $cnt++){
        if ($n % $cnt=='0'){
          echo "$n Não é Primo";
        } else{
          echo "$n é primo";
        }
      }
    ?>
	<br/>
	<input type="button" value="voltar" class="botao" onclick="window.history.go(-1)">
</div>
</body>
</html>
 
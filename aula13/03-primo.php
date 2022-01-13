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
      $n = isset($_GET["num"])?($_GET["num"]):'1';
      $mult = 0;
      for($cnt=1; $cnt<=$n; $cnt++){
        if ($n%$cnt==0){
          $mult++;
          echo "$cnt ";
        }
        
      }
      if($mult<=2){
        echo "é primo<br/>";
      } else{
        echo "Não é primo <br/>";
      }
    ?>
	<br/>
	<input type="button" value="voltar" class="botao" onclick="window.history.go(-1)">
</div>
</body>
</html>
 
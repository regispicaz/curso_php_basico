<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <h3>Tabuado</h3>
    <?php
       $n = isset($_GET['num'])?($_GET['num']):'1';
       for($cnt=1; $cnt<=10; $cnt++){
         $res = $n * $cnt;
         echo "$n X $cnt = $res </br>";
       }
    ?>
    <input type="button" class="botao" value="voltar" onclick="window.history.go(-1)">
</div>
</body>
</html>
 
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
       $cnt = ($_GET["num"])?$_GET["num"]:0;
       while ($cnt >= 10){
         
         $cnt++;
         echo "$cnt";
       }
             
       echo "O Resultado da operação foi $cnt";
    ?>
    </br><input type="button" class='botao' value="Voltar" onclick="window.history.go(-1)">
</div>
</body>
</html>
 
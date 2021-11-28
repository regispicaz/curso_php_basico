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
       $num = isset($_GET["num"])?$_GET["num"]:0;
       $op = isset($_GET["operacao"])?$_GET["operacao"]:1;
       switch ($op){
          case 1:
            $r = $num * 2;
          break;
          case 2:
            $r = $num ^ 3;
          break;
          case 3:
            $r = sqrt($num);  
       }
       
       echo "O Resultado da operação foi $r";
    ?>
    </br><input type="button" class='botao' value="Voltar" onclick="window.history.go(-1)">
</div>
</body>
</html>
 
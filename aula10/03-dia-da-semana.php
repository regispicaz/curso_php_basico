<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
    span.txt{
      color:#af1900;
    }
  </style>
</head>
<body>
<div>
    <?php
      $d = ($_GET["ds"])?$_GET["ds"]:0;
      switch ($d){
        case 2:
        case 3:         
        case 4: 
        case 5: 
        case 6:
          echo "Levanta e vai para aula :)"; 
        break;        
        case 1: 
        case 7: 
          echo "Pode dormir até mais tarde ZzZzZz...";
        break;
        default:
          echo "Dia da semana Inválido :(";
      }
      //echo "<span class='txt'> </span> portanto  <span class='txt'></span>";  
      
    ?>
    </br><input type="button" class="botao" value="Voltar" onclick="window.history.go(-1)">
</div>
</body>
</html>
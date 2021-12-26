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
      $state = ($_GET["estado"])?$_GET["estado"]:"AC";

      switch ($state){
        case "AM":
        case "RR":
        case "AP":
        case "PA":
        case "TO":   
        case "AC":
        case "RO":
          echo "Norte";
          break;

        case "MA":
        case "PI":
        case "CE":
        case "RN":
        case "PE":
        case "PB":
        case "SE":
        case "AL":
        case "BA":
          echo "Noredeste";
          break;

        case "GO":
        case "MT":
        case "MS":
          echo "Centro-oeste";
          break;

        case "ES":
        case "MG":
        case "RJ":        
        case "SP":
        case "DF":
          echo "Sudeste";
          break;

        case "RS":
        case "SC":
        case "PR":
          echo "Sul";
          break;

        default:echo "Selecione um estado";
      } 
    ?>

    </br><input type="button" class='botao' value="Voltar" onclick="window.history.go(-1)">
</div>
</body>
</html>
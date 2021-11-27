<!DOCTYPE html>
<html>
<head>
  <?php 
    $texto = isset($_GET["t"])?$_GET["t"]:"[Texto generico]";
    $tamanho = isset($_GET["tam"])?$_GET["tam"]:"12pt";
    $cor = isset($_GET["color"])?$_GET["color"]:"#f2f";
  ?>
  <style>
    span.txt{
      font-size: <?php echo $tamanho; ?>;
      color: <?php echo $cor;?>;
    }
  </style>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
      
      echo "<span class='txt'>$texto</span>";
    
    ?>
    </br><input type="button" value="Voltar" onclick="window.history.go(-1)">
</div>
</body>
</html>
 
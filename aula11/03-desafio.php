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
      //Chamando dados inseridos no HTML via "GET"
      $init = isset($_GET["v_init"])?($_GET["v_init"]):0;
      $end = isset($_GET["v_end"])?($_GET["v_end"]):0;
      $acres = isset($_GET["add"])?($_GET["add"]):2;
      
      //Lógica para acréscimo ou decréscimo 
      if($init <= $end){
        while ($init <= $end){
        echo "$init ";
        $init += $acres;
        }
      }else{
        while ($init >= $end){
          echo "$init ";
          $init -= $acres;
          }
      }
    ?>
   <input type="button" class='botao' value="Voltar" onclick="window.history.go(-1)">
</div>
</body>
</html>
 
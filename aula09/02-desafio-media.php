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
       $nota01 = isset($_GET["n1"])?($_GET["n1"]):0;
       $nota02 = isset($_GET["n2"])?($_GET["n2"]):0;
       $media = (($nota01 + $nota02)/2);

       if ($media >= 7){
         $res = "aprovado";
       }
       elseif($media >= 5 && $media < 7){
           $res = "exame";
         }
         else{
           $res = "reprovado";
         }
       echo "Sua primeira nota foi <span class='txt'> $nota01</span> e a segunda foi <span class='txt'>$nota02</span>";  
       echo "</br>Sua média é <span class='txt'> $media</span>, logo está <span class='txt'>$res</span>" ;
    ?>
    </br><input type="button" value="Voltar" onclick="window.history.go(-1)">
</div>
</body>
</html>
 
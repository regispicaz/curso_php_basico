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
       $ano = isset($_GET["ano"])?($_GET["ano"]):1900;
       $idade = (date("Y"))- $ano;
       if ($idade < 16){
         $tipovoto = "não vota";
       }
       elseif($idade >= 16 && $idade < 18 || $idade >= 64){
           $tipovoto = "voto é opcional";
         }
         else{
           $tipovoto = "voto é obrigatorio";
         }
       echo "Sua idade é $idade, logo o $tipovoto" ;
    ?>
    </br><input type="button" value="Voltar" onclick="window.history.go(-1)">
</div>
</body>
</html>
 
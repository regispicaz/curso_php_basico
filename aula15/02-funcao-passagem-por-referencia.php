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
    //Passagem por referência utilizamos & antes do parâmetro da função 
    function teste(&$x){
      $x = $x+=2;
      echo "O valor de X é $x<br/>";
    }

    $a = 15;//variável declarada
    teste($a);//O valor de $a está referenciando $x ficando com o exato valor. 
    echo "O valor de A é $a";
    ?>
</div>
</body>
</html>
 
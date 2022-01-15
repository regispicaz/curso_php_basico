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
    //Passagem por valor 
    function teste($x){
      $x = $x+=2;
      echo "O velo de X é $x<br/>";
    }

    $a = 15;//variável declarada
    teste($a);//O valor de $a está sendo passado para $x
    echo "O valor de é  a é $a<br/>";
    ?>
</div>
</body>
</html>
 
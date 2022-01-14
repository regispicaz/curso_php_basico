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
    //Rotina | Procedimentos (Função que não retorna valor)
    function soma($a,$b){
        $s = $a + $b;
        echo "A soma vale $s <br/>";
    }
    soma(4,15);//chamando função
    soma(11,32);
    $x =15;//declarando variável
    $y = 40;
    soma($x,$y)//chamando função com variáveis 
    ?>
</div>
</body>
</html>
 
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
    //Rotina | Função COM retorna de valor
    function soma($a,$b){
        $s = $a + $b;//Não necessáriamente precisa criar a variável
        return $s;//o retorno pode ser feito também (return $a + $b), sem a necessidade de criar a variável acima
    }
    
    $x =15;//declarando variável
    $y = 40;
    $r = soma($x,$y);//Variável que deve ser colocado dentro de uma variável se ratando de uma função que retorna valor
    echo "A soma entre $x e $y é $r.";
    ?>
</div>
</body>
</html>
 
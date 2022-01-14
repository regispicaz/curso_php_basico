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
    function soma(){
      $p = func_get_args();//Retorna um array contendo uma lista de argumentos da função
      $t = func_num_args();//Retorna o número de argumentos passados para a função
      $s = 0;

      for ($i=0;$i<$t;$i++){
        $s += $p[$i];
      }
      return $s;
    }

    $res = soma(3, 5, 4, 10, 15);
    echo "A soma do números é $res";
    ?>
</div>
</body>
</html>
 
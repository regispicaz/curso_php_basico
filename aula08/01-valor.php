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
        $valor = $_GET["vl"];
        $rq = sqrt($valor);
        echo "O valor digitado foi $valor e sua raiz quadrada é:" .number_format($rq, 2,",",".");
    ?>
    <button><a href="01-exercicio.html">Voltar</a></button>
</div>
</body>
</html>
 
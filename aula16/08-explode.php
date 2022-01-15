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
        $site = "Curso em vídeo";
        $vetor = explode(" ", $site);//devemos declarar o caractere que será esplodido para contagem de arrays
        print_r($vetor);

    ?>
</div>
</body>
</html>
 
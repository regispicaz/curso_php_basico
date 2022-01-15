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
        $nome = "régis picáz tavares";
        print "A string Tavares foi encontrada após a posição " . (ucwords(strpos($nome,"tavares")));
        
    ?>
</div>
</body>
</html>
 
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
        $frase = "rCurso de PHP | Curso em vídeo | PHP Básico.";
        print "O número de vezes que a palavra 'Curso' aparece é de " . (substr_count($frase, "Curso"));
        
    ?>
</div>
</body>
</html>
 
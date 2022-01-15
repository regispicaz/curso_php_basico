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
        $nome ="Regis";
        print "Meu nome é ". (str_pad($nome, 20, " ", STR_PAD_LEFT)) . " e sou Desenvolvedor PHP.";

        
    ?>
</div>
</body>
</html>
 
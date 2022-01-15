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
        $frase ="Olá sou Regis e sou estágiario e programo em PHP";
        $new_frase = (str_ireplace("estágiario", "Desenvolvedor", $frase));//Sustitui a palavra declarada no parametro da função
        print $new_frase;

        
    ?>
</div>
</body>
</html>
 
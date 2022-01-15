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
        $nome [0] = "Almeida";
        $nome [1] = "Silva";

        //echo implode(" ", $nome);
        print(implode("#",$nome));
        echo "<br/>";
        print(join(" ", $nome));//Join funciona igual ao implode
        
    ?>
</div>
</body>
</html>
 
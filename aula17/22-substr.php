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
        $site = "PICÁZ Soluções Tecnológicas";
        $sub = substr($site,0,22);//Fatiamento da string conforme paraetro de posições passados podendo ser valor negativo
        print($sub);

        echo "<br/>";
        $sub = substr($site, -9, 5);
        print($sub);
        
    ?>
</div>
</body>
</html>
 
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <pre>
    <?php
        $cnt = range(5,25,3);//Cria array com parametro inicial, final e intermvalo
        print_r($cnt);  //print_r para mostrar array em php durante os teste

        foreach($cnt as $valor){
            print " ".($valor);
        }
    ?>
    </pre> 
</div>
</body>
</html>
 
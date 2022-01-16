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
        $n = array(3,5,6,9);
        foreach($n as $vlr){
          //print " ".($vlr);
          //var_dump($vlr);
          
        }
        print "O vetor tem ". count ($n) . " elementos <br/>";
        print_r($n);

    ?>
    </pre> 
</div>
</body>
</html>
 
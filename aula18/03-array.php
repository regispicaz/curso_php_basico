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
        //Chaves prsonalizadas
        $vlr = array(1=>"A", 4=>"B", 7=>"C",12=>"D");//Declaração de vetores
        $vlr[] = "E";//Aloca um vetor na proxima índice
        unset($vlr[1]);//Desaloca o vetor do índice 1
            print_r($vlr);
    ?>
    </pre> 
</div>
</body>
</html>
 
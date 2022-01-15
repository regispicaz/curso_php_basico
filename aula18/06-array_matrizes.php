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
        $m = array( array(6,4),
                    array(7,9),
                    array(2,5)
        );
        $m[0][1] = $m [1][1];
        print_r($m);

    ?>
    </pre> 
</div>
</body>
</html>
 
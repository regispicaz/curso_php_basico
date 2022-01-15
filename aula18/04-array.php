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
        $cad = array("nome"=>"Fulano ",
                     "idade"=>32,
                     "peso"=>61.5);
        $cad["fuma"]=true;
        print_r($cad);
        foreach($cad as $campo => $vlr){
            print("O campo $campo possui o conteúdo $vlr <br/>");
        }
    ?>
    </pre> 
</div>
</body>
</html>
 
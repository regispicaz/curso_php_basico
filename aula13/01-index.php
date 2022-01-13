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
        //Contador
       for($cnt=1;$cnt<=10;$cnt++){
           echo"$cnt | ";
       }
       echo "</br>";
       for($cnt=10; $cnt>=1;$cnt--){
           echo"$cnt | ";
       }
       echo "</br>";
       for($cnt=0;$cnt<=50;$cnt+='5'){
           echo"$cnt | ";
       }
       echo "</br>";
       for($cnt=20;$cnt>=0;$cnt-='2'){
           echo"$cnt | ";
       }



    ?>
</div>
</body>
</html>
 
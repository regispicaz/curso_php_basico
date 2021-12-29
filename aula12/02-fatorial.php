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
        //Chamando o valor selecionado no html via metodo "GET"
        $v_fat = isset($_GET["v_calc"])?($_GET["v_calc"]):1;
        echo "Calculando o fatorial de $v_fat</br>";

        //Lógica para calculo Fatorial
        do{

        }while();


        
        /*
        $v = isset($_GET["val"])?$_GET["val"]:1;
        echo "<h1>Calculando o fatorial de $v </h1>";
        $c = $v;
        $fat = 1;
        do {
            $fat = $fat * $c;
            $c--;
        } while ($c >= 1);
        echo "<h2>$v ! = $fat";
        */
    ?>
    <input type="button" class='botao' value="Voltar" onclick="window.history.go(-1)">
</div>
</body>
</html>
 
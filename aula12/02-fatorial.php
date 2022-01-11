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
        $c = $v_fat;
        $fat = 1;

        do {
            $fat = $fat * $c;
            $c--;

        }while($c >=1);
        echo "$v_fat ! = $fat";

    ?>
    <input type="button" class='botao' value="Voltar" onclick="window.history.go(-1)">
</div>
</body>
</html>
 
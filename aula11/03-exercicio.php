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
    /*
    $cnt = 1;
    while ($cnt <= 5){
      echo "Valor $cnt: <input type='number' name='$cnt' max='100' min='0' value='0'/> </br>";//Não se pode por aspas duplas dentro de um echo.
      $cnt++;
    }

    $ind = 1;
    while ($ind <= 5){
      $v = "num".$ind;
      $url = "v".$ind;
      $$v = isset($_GET [$url]) ? $_GET[$url] :0;
      $ind++; 
    } 
    $ind = 1;
    while ($ind <= 5){
      $v ="num" . $ind;
      echo "Valor $ind: ". $$v . "</br>";
      $ind++;
    }*/
    $v_init = isset($_GET["init"])?($_GET["init"]):0;
    $v_end = isset($_GET["end"])?($_GET["end"]):0;
    $v_mt = isset($_GET["increment"])?($_GET["increment"]):2;
    echo "O valor Inicial é $v_init, o final $v_end o multiplicador é $v_mt";  
    
    ?>
    </br><input type="submit" value="Enviar" class="botao">
    <input type="button" class='botao' value="Voltar" onclick="window.history.go(-1)">
</div>
</body>
</html>
 
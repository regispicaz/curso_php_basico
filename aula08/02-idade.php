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
      $nome = isset($_GET["nome"])?$_GET["nome"]:"[Não informado]";
      $ano = isset($_GET["ano"])?$_GET["ano"]:0;
      $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[Sem sexo]";
      echo "Olá $nome, voce nasceu no ano de $ano, seu sexo é $sexo e sua idade é ".(date("Y") - $ano);
    
    ?>
    <button><a href="02-exercicio.html">Voltar</a></button>
</div>
</body>
</html>
 
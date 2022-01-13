<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form method="get" action="02-tabuada.php">
        <h3>Selecione a tabuada</h3>
        <select name="num">
            <?php
                for($num=1;$num<=10;$num++){
                    echo"<option>$num</option>";
                }
            ?>
        </select>
        <input type="submit" class="botao" value="Tabuada"/>
    </form>
</div>
</body>
</html>
 
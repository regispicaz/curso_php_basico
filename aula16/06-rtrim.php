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
        $txt = "   Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis nam praesentium doloremque nulla ullam eveniet illo at quidem placeat sequi, voluptatum veritatis, officia temporibus facere itaque sunt ex consectetur. Et!      ";
        $res = wordwrap($txt, 20, "<br/>\n", false);//cria quebra de linha com 20 caracteres tanto no fonte quanto no html mostrado (no fonte \n) (no html <br/>)(false gera quebra de linha por palavra) (true gera quebra de linha por numero de caracter)
        echo "$res<br/>";
        //$tamanho = strlen($txt);
        echo "O número de caractéres é de ", strlen($txt), " contando os espaços.<br/>";//Realiza contagem de strings contando os espaços
        $new = (rtrim($txt));//Elimina os epaços do início do texto
        echo "O número de caracteres eliminando os espaços no final é ", strlen($new);

    ?>
</div>
</body>
</html>
 
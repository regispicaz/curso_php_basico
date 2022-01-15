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
        $txt = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis nam praesentium doloremque nulla ullam eveniet illo at quidem placeat sequi, voluptatum veritatis, officia temporibus facere itaque sunt ex consectetur. Et!";
        $count = (str_word_count($txt,0));
        print($count);
        

    ?>
</div>
</body>
</html>
 
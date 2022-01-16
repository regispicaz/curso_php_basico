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
        $v = array("A", "B", "C", "D", "E");
        $v[] = "F";//Inclui novo índice ao final da fila
        array_push($v, "G");//Inclui novo índice ao final da pilha
        array_pop($v);//Desalocar o valor do útimo índice da pilha
        array_unshift($v, "X");//Inclui índice ao início da pilha
        array_shift($v);//Remove o elemento do início da pilha
        sort($v);//Ordena os índices do vetor
        rsort($v);//Ordem reversa do índices do vetor
        asort($v);//ordena os valores e mantem os índices
        arsort($v);//Oredem reversa e mantem os índices
        ksort($v);//ordena por chaves (key) 
        krsort($v);//Ordem reversa por chaves(key)
        print_r($v);

    ?>
    </pre> 
</div>
</body>
</html>
 
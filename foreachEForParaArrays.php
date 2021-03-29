<?php
    $gameNames = ['Destiny', 'The Last of Us: Part II', 'God of War', 'Life is Strange', 'Grand Theft Auto V'];

    /* foreach percorre cada chave de um array e imprime seu valor. | Obs: a chave também pode ser imprimida. */
    foreach ($gameNames as $key => $value) { /* Para cada $variável imprima a $key (chave) e o $value (valor) */
        echo "[$key] => $value<br/>"; /* Quando o array não tem chave é o index do array que é setado na chave ($key) */
    }
    echo "<hr/>";

    $length = count($gameNames); /* A função count() funciona como o length e retorna o tamanho de determinado array */
    echo $length.'<hr/>';

    for ($i = 0; $i < count($gameNames); $i++) {
        echo $gameNames[$i] . ', ';
    }
?>
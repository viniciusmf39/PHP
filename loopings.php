<?php
    echo '<h1 style="text-align: center;">Laço de repetição "for"</h1>';
    for ($i = 1; $i <= 10; ++$i) {
        echo "$i, ";
    }
    echo "<hr/>";

    echo '<h1 style="text-align: center;">Laço de repetição "while"</h1>';
    $number1 = 10;
    while ($number1 >= 1) {
        echo $number1--.'<br/>';
    }
    echo '<hr/>';

    echo '<h1 style="text-align: center;">Laço de repetição "do while"</h1>';
    $number2 = 1;
    do {
        echo $number2++.'<br/>';
    } while ($number2 <=10);
    echo '<hr/>';

    /* EXEMPLO DE TABUADA DO 1 AO 10 */
    echo '<h1 style="text-align: center;">Exemplo: tabuada do 1 ao 10 utilizando o laço de repetição "for"</h1>';
    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= 10; $j++) {
            echo "$i x $j = ".$i * $j.'<br/>';
        }
        echo '<hr/>';
    }
?>
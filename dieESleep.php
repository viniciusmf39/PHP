<?php
    /* sleep() -->  Faz com que o servidor leve certo tempo para iniciar. Recebe como parâmetro o tempo em segundos */
    sleep(2);
    echo "Hello World<br/>";
    sleep(2);
    echo "Hello World Again<hr/>";

    $number1 = 3;
    $number2 = 7;
    if ($number1 > $number2) {
        echo "O $number1 é menor do que o $number2";
    } else {
        die("O script parou de ser executado, ou seja, deu ruim e o código morreu"); /* die fax com que o código pare de rodar e não leia mais nenhuma linha de código */
    }

    echo "Aqui não irá acontecer nada";
?>
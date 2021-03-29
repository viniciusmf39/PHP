<?php
    $number1 = 1;
    $number2 = 2;
    $number3 = 3;
    $number4 = '1';

    if ($number1 == $number3) {
        echo "Igual";
    } else if ($number1 === $number4) {
        echo "Estritamente igual, ou seja, mesmo valor e mesmo tipo!";
    } else if ($number2 != $number3) {
        echo "Diferente";
    } else if ($number1 !== $number3) {
        echo "Estritamente diferente";
    } else {
        echo "Nenhuma das alternativas";
    }
?>
<?php
    $number1 = 1;
    $number2 = 2;
    $number3 = 3;
    $number4 = '1';

    if ($number1 < $number4) {
        echo "Igual<hr/>";
    } else if ($number1 <= $number4) {
        echo "Menor ou igual<hr/>";
    } else if ($number2 > $number3) {
        echo "Maior<hr/>";
    } else if ($number1 >= $number3) {
        echo "Maior ou igual<hr/>";
    } else if ($number2 != $number4) {
        echo "Diferente<hr/>";
    } else {
        echo "Nenhuma das alternativas<hr/>";
    }

    if ($number1 === $number4 && $number1 < $number2) {
        echo "$number1 é estritamente igual a $number4 e menor do que $number2";
    } else if ($number1 === $number4 || $number1 < $number2) {
        echo "$number1 é estritamente igual a '$number4' ou menor do que $number2";
    } else {
        echo "Operador Lógico && (E) e Operador Lógico || (OU)";
    }
?>
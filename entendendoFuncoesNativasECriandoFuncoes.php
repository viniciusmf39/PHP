<?php
    /* Exemplo: Função calculadoraSimples */
    echo "<h1 style=\"text-align: center;\">Exemplo: Função calculadora simples</h1>";
    function calculadoraSimples($n1, $op, $n2) {
        switch ($op) {
            case '+':
                echo "$n1 + $n2 = ".$n1 + $n2;
                break;

            case '-':
                echo "$n1 - $n2 = ".$n1 - $n2;
                break;

            case '*':
                echo "$n1 x $n2 = ".$n1 * $n2;
                break;

            case '/':
                echo "$n1 / $n2 = ".$n1 / $n2;
                break;

            default:
                echo "Operação Inválida";
                break;
        }
    }

    calculadoraSimples(7, '*', 3);
?>
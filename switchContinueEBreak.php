<?php
    $nome = 'Joel';

    switch ($nome) {
        case 'Ellie':
            echo "O nome é $nome<hr/>";
            break;
        case 'Joel':
            echo "O nome é $nome<hr/>";
            break;
    }

    echo "<br/>";

    for ($i = 1; $i <= 10; $i++) {
        echo "$i<hr/>";
        if ($i == 7) {
            break; /* O break pode ser usado com for, while, do while, foreach e switch */
        }
    }

    echo "<br/>";

    for ($i = 1; $i <= 10; $i++) {
        if ($i == 3 || $i == 7) {
            continue; /* O brcontinueeak pode ser usado com for, while, do while e foreach */
        }
        echo "$i<hr/>";
    }
?>
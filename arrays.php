<?php
    $animeNames = array('Tanjiro', 'Kaneki', 'Killua', 'Sasuke', 'Itachi');
    echo $animeNames[0].', ';
    echo $animeNames[1].', ';
    echo $animeNames[2].', ';
    echo $animeNames[3].', ';
    echo $animeNames[4].'<hr/>';

    $seriesNames = ['The Flash', 'Supernatural', 'Lúcifer', 'Eu a Patroa e as Crianças', 'Game of Thrones'];
    echo $seriesNames[0].', ';
    echo $seriesNames[1].', ';
    echo $seriesNames[2].', ';
    echo $seriesNames[3].', ';
    echo $seriesNames[4].'<hr/>';

    $informacoes['nome'] = 'Lucas';
    $informacoes['idade'] = 22;
    $informacoes['cidade'] = 'Diadema';
    echo $informacoes['nome'].', ';
    echo $informacoes['idade'].', ';
    echo $informacoes['cidade'].'<hr/>';

    /* Imprimindo array com for */
    for ($i = 0; $i < count($animeNames); $i++) {
        echo $animeNames[$i].'<hr/>';
    }
?>
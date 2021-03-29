<?php
    /* array_merge --> Função para juntar arrays */
    $array1 = array("vermelho", "verde", "azul");
    $array2 = array(10, 20,  32);
    $result = array_merge($array1, $array2);
    print_r($result);
    echo "<hr/>";

    $array1 = ["chave1" => "valor1", "chave2" => "valor2"];
    $array2 = ["chave2" => "outro valor", "chave1" => "outro valor", "chave3" => "valor3", "chave4" => "valor4"];
    print_r(array_intersect_key($array1, $array2)); /* Funciona como se fosse uma INTERSEÇÂO LÓGICA */
    echo "<hr/>";

    $array3 = ['<h1>Kaneki</h1>', 'Kirito', '<h1>Killua</h1>'];
    print_r(array_map('strip_tags', $array3)); /* Aplica uma função em determinado array */
?>
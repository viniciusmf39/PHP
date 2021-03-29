<?php
    /* substr: unção para recortar String */
    $conteudo = 'Ut varius turpis ut volutpat viverra. Quisque fermentum nulla consectetur, sagittis sem in, iaculis nisi. Aliquam elementum nisi in purus imperdiet, a tempor tortor rhoncus. Sed tristique purus vitae efficitur luctus. Nulla auctor justo arcu, rutrum placerat purus pulvinar nec. Cras sed euismod magna, a suscipit risus. Nam tincidunt mauris iaculis fringilla tincidunt. Duis gravida aliquet quam in venenatis. Pellentesque sed ex gravida, tincidunt ex a, sodales erat. Nullam sed ipsum a leo bibendum commodo et et lectus.';
    echo substr($conteudo, 0, 20); /* Retorna os primeiros 20 caracteres */
    echo "<hr/>";

    /* explode: Serve para remover o delimitador de um array, neste caso o delimitador foi o espaço. | Função que retorna um array com as palavras que estão sepadas com ' ' (espaço) */
    $nome = 'Goku Super Sayan God Blue Kaioken x20';
    $nomes = explode(' ', $nome);
    print_r($nomes);
    echo "<hr/>";

    /* implode: Serve para juntar um array com um delimitador, neste caso o delimitador foi o espaço */
    $nomes = implode(' ', $nomes);
    print_r($nomes);
    echo "<hr/>";

    /* strip_tags: Função que remove tags html's de Strings */
    $conteudo = '<h1>Kamado Tanjiro</h1>';
    echo "$conteudo<br/>";
    echo strip_tags($conteudo);
    echo "<hr/>";

    /* Função que mostra o código html */
    echo htmlentities('<div></div>')
?>
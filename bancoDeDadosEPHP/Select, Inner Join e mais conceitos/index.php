<?php
    $pdo = new PDO('mysql:host=localhost; dbname=modulo_8', 'root', '');

    $sql = $pdo -> prepare("SELECT * FROM posts");

    $sql -> execute();

    $info = $sql -> fetchAll(); /* fetchAll --> Significa que vai pegar todas as informações */

    # Obtendo as informações com o foreach
    echo "<h1 style=\"text-align: center;\">Obtendo as informações com o 'foreach'</h1>";
    foreach ($info as $key => $value) {
        echo 'Título: '.$value['titulo'].'<br/>';
        echo 'Notícia: '.$value['conteudo'].'<hr/>';
    }

    #Obtendo as informações com o for
    echo "<h1 style=\"text-align: center;\">Obtendo todas as informações com o for</h1>";
    for ($i = 0; $i < count($info); $i++) {
        echo 'Título: '.$info[$i]['titulo'].'<br/>';
        echo 'Notícia: '.$info[$i]['conteudo'].'<hr/>';
    }



    # Selecionando e exibindo uma categoria específica
    $sql = $pdo -> prepare("SELECT * FROM posts WHERE categoria_id = ?"); // index.php?categoria_id=1 ou 2
    $sql -> execute([$_GET['categoria_id']]);

    $info = $sql -> fetchAll();

    echo "<h1 style=\"text-align: center;\">Obtendo todas as informações da categoria 1 ou categoria 2</h1>";
    foreach ($info as $key => $value) {
        echo 'Título: '.$value['titulo'].'<br/>';
        echo 'Notícia: '.$value['conteudo'].'<hr/>';
    }



    # Selecionando e exibindo as categorias dinâmicamente
    // $sql = $pdo -> prepare("SELECT * FROM categorias");
    // $sql -> execute();

    // $info = $sql -> fetchAll();

    // echo "<h1 style=\"text-align: center;\">Selecionando e exibindo as categorias dinâmicamente</h1>";
    // foreach ($info as $key => $value) {
    //     $categoria_id = $value['id'];
    //     echo 'Exibindo posts de: '.$value['nome'].'<br/><br/>';

    //     $sql = $pdo -> prepare("SELECT * FROM posts WHERE categoria_id = $categoria_id");
    //     $sql -> execute();
    //     $infoPosts = $sql -> fetchAll();
    //     foreach ($infoPosts as $key => $value) {
    //         echo 'Título: '.$value['titulo'].'<br/>';
    //         echo 'Notícia: '.$value['conteudo'].'<hr/>';
    //     }
    // }

    $sql = $pdo -> prepare("SELECT `posts`.*,`categorias`.*,`posts`.`id` AS `post_id` FROM `posts` INNER JOIN `categorias` ON `posts`.`categoria_id` = `categorias`.`id`"); // ON neste contexto funciona como se fosse um WHERE
    $sql -> execute();

    $info = $sql -> fetchAll(PDO::FETCH_ASSOC); // PDO::FETCH_ASSOC é um parâmetro que serve para poder retornar somente as colunas

    # Obtendo as informações com o foreach
    echo "<h1 style=\"text-align: center;\">Juntando tabelas utilizando o INNER JOIN</h1>";

    echo '<pre>';
    print_r($info);
    echo '</pre>';
?>
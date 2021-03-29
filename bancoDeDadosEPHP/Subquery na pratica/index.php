<?php
    define('HOST', 'localhost');
    define('DB', 'in_between');
    define('USER', 'root');
    define('PASS', '');

    try {
        $pdo = new PDO('mysql:host='.HOST.';dbname='.DB, USER, PASS, [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]);
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(Exception $e) {
        echo 'erro ao conectar';
    }

    $select = $pdo -> prepare("SELECT * FROM filmes WHERE categoria_id = (SELECT categoria_id FROM categorias WHERE nome = 'Terror')");
    $select -> execute();

    echo "<pre>";
    print_r($select -> fetchAll());
    echo "</pre>";
?>
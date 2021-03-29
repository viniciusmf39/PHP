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

    # IN
    $sql = $pdo -> prepare("SELECT * FROM clientes WHERE id IN (1, 2, 4)"); // Seleciona todos os clientes de id 1, 2 e 4
    $sql -> execute();

    // echo $sql -> fetch()['nome'];
    $clientes = $sql -> fetchAll();

    echo '<h1 style="text-align: center;">IN</h1>';
    foreach ($clientes as $key => $value) {
        echo $value['nome'].'<hr/>';
    }

    # BETWEEN
    $sql = $pdo -> prepare("SELECT * FROM clientes WHERE data BETWEEN '2020-07-01' AND '2020-07-31'"); // Seleciona todos os clientes de id 1, 2 e 4
    $sql -> execute();

    $clientes = $sql -> fetchAll();

    echo '<h1 style="text-align: center;">BETWEEN</h1>';
    foreach ($clientes as $key => $value) {
        echo $value['nome'].'<hr/>';
    }
?>
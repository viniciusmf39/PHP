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

    $select = $pdo -> prepare("SELECT * FROM clientes GROUP BY cargo HAVING pontos > 5");

    $select -> execute();

    echo "<pre>";
    print_r($select -> fetchAll());
    echo "</pre>";

    // $clientes = $select -> fetchAll();

    // foreach ($clientes as $key => $value) {
    //     echo $value['cargo'].'<br/>';
    // }
?>
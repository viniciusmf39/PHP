<?php
    define('HOST', 'localhost');
    define('DB', 'db_teste');
    define('USER', 'root');
    define('PASS', '');

	try {
        $pdo = new PDO('mysql:host='.HOST.';dbname='.DB, USER, PASS, [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]);
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(Exception $e) {
        echo 'erro ao conectar';
    }

    $sql = $pdo -> prepare("SELECT * FROM clientes WHERE nome LIKE '%u%'"); // '%u' -> Retorna todos os nomes que terminem  com a letra u | '%u%' -> retorna ttodos os nomes que contenham a letra u
    $sql -> execute();

    // echo $sql -> fetch()['nome'];
    $clientes = $sql -> fetchAll();

    foreach ($clientes as $key => $value) {
        echo $value['nome'].'<hr/>';
    }
?>
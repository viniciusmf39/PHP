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

    $pdo -> exec("LOCK TABLES `clientes` WRITE");

    sleep(10);
?>
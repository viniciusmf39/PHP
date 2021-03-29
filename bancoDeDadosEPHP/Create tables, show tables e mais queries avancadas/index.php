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

    $tables = $pdo -> query("SHOW TABLES");
    $tables = $tables -> fetchAll();

    echo '<pre>';
    print_r($tables);
    echo '</pre>';

    /* CRIANDO TABELA PELO PHP */

    $sql = 'CREATE TABLE testeCriandoTabela (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP
    )';

    $pdo -> exec($sql);
?>
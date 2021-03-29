<?php
    $pdo = new PDO('mysql:host=localhost; dbname=db_teste', 'root', '');
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<h1 style=\"text-align: center;\">LEFT JOIN</h1>";
    $sql = $pdo -> prepare("SELECT * FROM `clientes` LEFT JOIN cargos ON `clientes`.`cargo` = `cargos`.`id`"); // LIMIT --> Limita a quantidade de dados que será retornado
    $sql -> execute();
    $clientes = $sql -> fetchAll();
    foreach ($clientes as $key => $value) {
        echo $value['nome'].' | ';
        echo $value['nome_cargo'].'<hr/>';
    }

    echo "<h1 style=\"text-align: center;\">RIGHT JOIN</h1>";
    $sql = $pdo -> prepare("SELECT * FROM `clientes` RIGHT JOIN cargos ON `clientes`.`cargo` = `cargos`.`id`"); // LIMIT --> Limita a quantidade de dados que será retornado
    $sql -> execute();
    $clientes = $sql -> fetchAll();
    foreach ($clientes as $key => $value) {
        echo $value['nome'].' | ';
        echo $value['nome_cargo'].'<hr/>';
    }
?>
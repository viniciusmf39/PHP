<?php
    $pdo = new PDO('mysql:host=localhost; dbname=db_teste', 'root', '');
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); /* Serve para mostrar eventuais erros */

    echo "<h1 style=\"text-align: center;\">GROUP BY</h1>";
    $sql = $pdo -> prepare("SELECT * FROM `clientes` GROUP BY cargo LIMIT 1"); // LIMIT --> Limita a quantidade de dados que será retornado
    $sql -> execute();
    $clientes = $sql -> fetchAll();
    foreach ($clientes as $key => $value) {
        echo $value['nome'].'<hr/>';
    }

    echo "<h1 style=\"text-align: center;\">ORDER BY nome ASC</h1>";
    $sql = $pdo -> prepare("SELECT * FROM `clientes` ORDER BY nome ASC LIMIT 4"); // ORDER BY por padrão vem antes de LIMIT e ASC serve para ordenar em ordem crescente
    $sql -> execute();
    $clientes = $sql -> fetchAll();
    foreach ($clientes as $key => $value) {
        echo $value['nome'].'<hr/>';
    }

    echo "<h1 style=\"text-align: center;\">ORDER BY nome DESC</h1>";
    $sql = $pdo -> prepare("SELECT * FROM `clientes` ORDER BY nome DESC LIMIT 4"); // ORDER BY por padrão vem antes de LIMIT e DESC serve para ordenar em ordem decrescente
    $sql -> execute();
    $clientes = $sql -> fetchAll();
    foreach ($clientes as $key => $value) {
        echo $value['nome'].'<hr/>';
    }
?>
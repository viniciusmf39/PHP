<?php
    $pdo = new PDO('mysql:host=localhost; dbname=modulo_8', 'root', '');

    $id = 3;

    // $sql = $pdo -> prepare("DELETE FROM `clientes` WHERE id=2");
    $sql = $pdo -> prepare("DELETE FROM `clientes` WHERE id=?");

    if ($sql ->execute([$id])) {
        echo "Cliente deletado com sucesso!";
    }
?>
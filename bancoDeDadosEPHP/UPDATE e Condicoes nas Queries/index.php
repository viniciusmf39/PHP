<?php
    $pdo = new PDO('mysql:host=localhost; dbname=modulo_8', 'root', '');

    $id = 3;

    // $sql = $pdo -> prepare("UPDATE `clientes` SET nome='Sarada', sobrenome='Uchiha' WHERE id=$id");
    $sql = $pdo -> prepare("UPDATE `clientes` SET nome='Tanjiro', sobrenome='Kamado' WHERE nome='Kakashi' AND sobrenome='Hatake'");
    $sql = $pdo -> prepare("UPDATE `clientes` SET nome=?, sobrenome=? WHERE nome=? OR sobrenome=?");

    if ($sql ->execute()) {
        echo "Cliente atualizado com sucesso!";
    }
?>
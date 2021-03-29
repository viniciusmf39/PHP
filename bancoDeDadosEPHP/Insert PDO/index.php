<?php
    date_default_timezone_set('America/Sao_Paulo');
    $pdo = new PDO('mysql:host=localhost; dbname=modulo_8', 'root', '');

    // $sql = $pdo -> prepare("INSERT INTO `clientes` VALUES (null, 'Lucas', 'Monteiro', '2020-08-01 11:30:00')"); /* O 1º value é sempre nulo pois será adicionado automaticamente um id */
    // $sql -> execute(); /* executa o comando prepare */

    /* PEGANDO OS DADOS DE UM FORMULÁRIO */
    if (isset($_POST['acao'])) {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $momento_registro = date('Y-m-d H:i:s');

        $sql = $pdo -> prepare("INSERT INTO `clientes` VALUES (null, ?, ?, ?)");
        $sql -> execute([$nome, $sobrenome, $momento_registro]); // Quando eu utilizo '?' para receber os valores eu preciso definir um array com cada índice definido com base na ordem dos meus dados que serão recebidos
        echo "Cliente inserido com sucesso";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro no banco</title>
</head>

<body>
    <form method="post">
        <input type="text" name="nome" required>
        <input type="text" name="sobrenome" required>
        <input type="submit" name="acao" value="Enviar!">
    </form>
</body>

</html>
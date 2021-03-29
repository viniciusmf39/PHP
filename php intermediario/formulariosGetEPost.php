<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>

<body>
    <?php
        /* MÉTODO GET --> GET é utilizado para 'receber' alguma coisa */
        // if (isset($_GET['acao'])) {
        //     $nome = @$_GET['nome']; /* GET pega valores passados no link da minha página */
        //     $email = @$_GET['email']; /* @ --> Impede de aparecer warnings na tela */

        //     echo "$nome<br/>$email<hr/>";
        // }

        /* MÉTODO POST --> POST serve para 'enviar' alguma coisa */
        // if (isset($_POST['acao'])) {
        //     $nome = @$_POST['nome']; /* GET pega valores passados no link da minha página */
        //     $email = @$_POST['email']; /* @ --> Impede de aparecer warnings na tela */

        //     echo "$nome<br/>$email";
        // }


        /* EXEMPLOS PRÁTICOS COM MÉTODO POST */
        /* 1) */
        // if (isset($_POST['acao'])) {
        //     echo $_POST['numero1'] + $_POST['numero2'];
        // }

        /* 2) */
        // if (isset($_POST['acao'])) {
        //     echo $_POST['nome'];
        // }

        /* 3) */
        if (isset($_POST['acao'])) {
            foreach ($_POST['valor'] as $key => $value) {
                echo "$key => $value<hr/>";
            }
        }
    ?>


    <h2>Método GET</h2>
    <form method="get">
        <input type="text" name="nome">
        <input type="text" name="email">
        <input type="submit" name="acao" value="Enviar">
    </form>

    <h2>Método POST</h2>
    <form method="post">
        <input type="text" name="nome">
        <input type="text" name="email">
        <input type="submit" name="acao" value="Enviar">
    </form>


    <!-- Exemplos Práticos -->
    <!-- 1) -->
    <h2 class="exemplos">Exemplos práticos com POST</h2>
    <form method="post">
        <input type="text" name="numero1">
        <input type="text" name="numero2">
        <input type="submit" name="acao" value="Enviar">
    </form>

    <!-- 2) -->
    <form method="post">
        <select name="nome">
            <option value="Uzumaki">Uzumaki</option>
            <option value="Boruto">Boruto</option>
        </select>
        <input type="submit" name="acao" value="Enviar">
    </form>

    <!-- 3) -->
    <form method="post">
        <select name="nome">
            <option value="Uzumaki">Uzumaki</option>
            <option value="Boruto">Boruto</option>
        </select>
        <input type="checkbox" name="valor[]" value="10">10
        <input type="checkbox" name="valor[]" value="20">20
        <input type="checkbox" name="valor[]" value="30">30
        <input type="checkbox" name="valor[]" value="40">40
        <input type="submit" name="acao" value="Enviar">
    </form>
</body>

</html>
<?php
    session_start();
    // if (isset($_SESSION['nome'])) {
    //     echo $_SESSION['nome'];
    // }

    // $_SESSION['nome'] = ''; /* Essa é uma forma de excluir uma sessão mas ela ainda fica na memória do servidor*/
    // echo $_SESSION['nome'];

    // unset($_SESSION['nome']); /* Dessa forma eu destruo (limpo) a sessão do meu servidor */

    // session_destroy(); /* Destrói (limpa da memória) todas as minhas variáveis de sessão */

    $_SESSION['nome'] = 'Ban';
    $_SESSION[1]['nome'] = 'King';
    session_destroy();
?>
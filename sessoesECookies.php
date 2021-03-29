<?php
    /* sessoes ==> Fica válida até o usuário fechar o navegador */
    /* cookies ==> Mesmo depois de fechar o navegador, quando voltar o conteúdo (por exemplo, uma variável) ainda vai estar guardado pelo tempo que a gente definir */

    #SESSÕES
    // session_start();
    // $_SESSION['nome'] = 'Meliodas';
    // $_SESSION['idade'] = 3000;

    // echo $_SESSION['nome'];

    #COOKIES
    // session_start();
    // setcookie('nome', 'Escanor', time() + ((60 * 60) * 24), '/'); // Parâmetros do cookie -> 1º: nome que eu quero dar ao cookie, 2º: valor, 3º: tempo que eu quero que expire, 4º:path
    // echo $_COOKIE['nome'];

    #Para destruir um cookie basta setar um tempo negativo
    session_start();
    setcookie('nome', 'Escanor', time() - ((60 * 60) * 24), '/');
    echo $_COOKIE['nome'];
?>
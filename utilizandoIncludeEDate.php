<?php
    date_default_timezone_set('America/Sao_Paulo'); /* Define o fuso horário do php | Desta forma fica utf-8 */

    $data = date('d/m/Y H:i:s'); // Se o "Y" for minúsculo o formato do ano ficará diferente
    echo "$data<hr/>";

    $data = date('d/m/Y H:i:s', time() + (60 * 10)); // time() + (60 * 10) --> time recebe o tempo em segundos, nesse caso recebe 60s * 10 que dá 10minutos
    echo "$data<hr/>";

    /* Função para incluir arquivos dentro de nossa página. É como se fosse um import no Javascript */
    include('dieESleep.php');
?>

<h1>Conteúdo</h1>


<?php
    include('entendendoFuncoesNativasECriandoFuncoes.php');
?>
<?php
    echo $_SERVER['SERVER_NAME'];
    echo '<hr/>';
    echo $_SERVER['DOCUMENT_ROOT'];
    echo '<hr/>';

    echo '<pre>';
    print_r($_SERVER);
    echo '</pre>';
?>
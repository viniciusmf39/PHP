<?php
    function myAutoLoad($class) {
        $class = str_replace('\\', '/', $class);
        if (file_exists('autoload_Classes/'.$class.'.php')) {
            include('autoload_Classes/'.$class.'.php');
        }
    }

    spl_autoload_register('myAutoLoad');
?>
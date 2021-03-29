<?php
    class MyClass {
        const VALOR = 300;

        public function __construct() {
            echo self::VALOR;
        }
    }

    new MyClass;
    echo "<hr/>";

    echo MyClass::VALOR; // Para poder acessar a constante fora da classe;
?>
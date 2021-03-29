<?php
    abstract class Teste { // abstract --> é uma classe que serve somente para ser herdada
        public function funcao1() {
            echo "Chamando funcao1<br/>";
        }

        abstract function funcao2(); // A função precisará ser declarada no objeto que for herdar a classe Teste
    }

    class Principal extends Teste {
        public function funcao2() {
            echo "Estou declarando oficialmente um método abstrato<br/>";
        }

        public static function staticMethod() {
            echo "Static Method<br/>";
        }

        public function funcao3() {
            // Principal::staticMethod();
            self::staticMethod();
            Principal2::anotherStaticMethod();
        }
    }

    class Principal2 {
        public static function anotherStaticMethod() {
            echo "Another Static Method";
        }
    }

    $principal = new Principal;
    $principal -> funcao1();
    echo "<hr/>";

    $principal -> funcao2();
    echo "<hr/>";

    Principal::staticMethod();
    echo "<hr/>";

    $principal -> funcao3();
    echo "<hr/>";

    $principal -> funcao3();
?>
<?php
    include('interfacesEImplements2.php');

    class Teste implements Interface1 {
        public function printOnScreen($par) {
            echo $par;
        }
    }

    $teste = new Teste;
    $teste -> printOnScreen('Hello World!<hr/>');
?>
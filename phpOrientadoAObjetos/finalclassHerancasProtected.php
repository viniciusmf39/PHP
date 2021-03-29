<?php
    class Filha { /* final class Filha --> Faz com que a classe Filha não possa ser herdada por nenhuma outra classe */
        public function printHello() {
            echo "Hello!<br/>";
        }

        protected function funcaoTeste() { //protected permite que a função seja utilizada por outras classes. Obs: o private não permite
            echo "Protected<br/>";
        }
    }

    class Pai extends Filha { // Resumindo, class Pai herde tudo que está em Filha
        public function printHello() { // Essa função 'reescreve' a função printHello() que estava sendo herdada
            parent::printHello(); // Caso eu queria chamar a função que foi 'reescrita'
            echo "Hello father!<br/>";
        }

        public function printBye() {
            echo "Good Bye!<br/>";
            $this -> funcaoTeste();
        }
    }

    $pai = new Pai;
    $pai -> printBye();
    echo "<hr/>";

    $filha = new Filha;
    $filha -> printHello();
    echo "<hr/>";

    $heranca = new Pai;
    $heranca -> printHello();
    $heranca -> printBye();
    echo "<hr/>";

    $pai -> printBye();
?>
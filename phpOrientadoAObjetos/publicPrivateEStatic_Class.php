<?php
/* Esta classe é de exemplo */
    class Exemplo {
        private $var1;
        public $var2;

        public function bomDia() {
            echo "Bom dia";
        }

        private function boaNoite() {
            echo "Boa noite";
        }

        public static function staticFunction() {
            echo "Esse é um método static";
        }

        public static $var3 = 'static';

        public function setVar1($var1) {
            $this -> var1 = $var1;
            return $this -> var1;
        }

        public function pegaVar1() {
            return $this -> var1;
        }

        // public function calculadoraSimples($n1, $op, $n2) {
        //     $this -> n1 = $n1;
        //     $this -> op = $op;
        //     $this -> n2 = $n2;
        //     switch ($this -> op) {
        //         case '+':
        //             return $this -> n1.' + '.$this -> n2.' = '.$this -> n1 + $this -> n2;
        //             break;

        //         case '-':
        //             echo "$n1 - $n2 = ".$n1 - $n2;
        //             break;

        //         case '*':
        //             echo "$n1 x $n2 = ".$n1 * $n2;
        //             break;

        //         case '/':
        //             echo "$n1 / $n2 = ".$n1 / $n2;
        //             break;

        //         default:
        //             return "Operação Inválida";
        //             break;
        //     }
        // }
    }
?>
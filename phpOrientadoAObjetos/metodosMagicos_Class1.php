<?php
    class Class1 {
        private $nome;
        private $idade;

        function __construct($nome, $idade) {
            $this->nome = $nome; // $this->nome faz referência ao $nome que está fora do __construct e $nome faz referência ao $nome que estou passando como parâmetro do __construct
            $this->idade = $idade;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getIdade() {
            return $this->idade;
        }
    }
?>
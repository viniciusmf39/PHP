<!-- ORIENTAÇÃO A OBJETOS NO PHP OU OOP (PHPOO)

Pessoa {
    nome
    idade
    peso

    crescer() funções em um objeto são chamadas de métodos
    comer()
} -->

<?php
    class Pessoa {
        // Objeto pessoa

        private $nome = 'Lucas';
        private $idade = '22';
        private $altura = '1.75';
        private $comida = 'Lasanha';
        private $peso = '65kg';

        public function crescer() { /* Era private e alterei para public */
            $this -> comer(); /* $this faz referência ao objeto atual */
            echo "Estou crescendo!";
        }

        private function comer() {
            echo "Estou comendo!";
        }

    }

    // É preciso INSTÂNCIAR (CRIAR) um objeto para acessar seus valores
    $pessoa = new Pessoa;
    $pessoa2 = new Pessoa;

    // Acessando atributos de um objeto
    // $$pessoa -> comer();
    $pessoa -> crescer(); /* Neste caso vai dar erro pois a função crescer é privada e não pode ser acessada fora do objeto Pessoa */
?>
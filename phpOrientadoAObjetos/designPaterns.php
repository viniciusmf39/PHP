<?php
    # Padrão de Projeto: Factory ou Simple Factory
    class Cachorro {
        function __construct() {
            echo "Classe Cachorro<br/>";
        }
    }

    class Gato {
        function __construct() {
            echo "Classe Gato<br/>";
        }
    }

    class Animal {
        public static function build($className) { // build é o nome mais usado para simple factory
            if (class_exists($className)) {
                return new $className; // Essa função é o factory
            } else {
                die('Ops! A classe não existe!<br/>');
            }
        }
    }

    Animal::build('Gato');
    Animal::build('Cachorro');
    // Animal::build('Coelho');
    echo "<hr/>";


    # Padrão de Projeto: Facade (fachada)  |  Exemplo: Fechando compra em uma loja virtual

    // Adicionar itens no carrinho | Fechar Carrinho - Classe: Carrinho
    // Calcular Frete - Classe: Frete
    // Fechar Pedido - Classe: Pedido

    class Carrinho {
        public function fecharCarrinho() {
            echo "Carrinho Fechado!";
        }
    }

    class Frete {
        public function calcularFrete() {
            echo "Frete Calculado!";
        }
    }

    class Pedido {
        public function fecharPedido() {
            echo "Pedido Fechado!";
        }
    }

    class Loja {
        public function finalizarCompra() {
            $carrinho = new Carrinho;
            $carrinho -> fecharCarrinho();
            echo "<br/>";

            $frete = new Frete;
            $frete -> calcularFrete();
            echo "<br/>";

            $pedido = new Pedido;
            $pedido -> fecharPedido();
            echo "<hr/>";

            /* ESSE SERIA O MODO TRADICIONAL DE FAZER */
            /*
                No padrão de projeto Facade uma única classe vai ser responsável por executar todas as ações
                sem que a gente tenha que ficar instânciando as outras classes chamando os métodos
            */
            /* Ficaria assim: */
            $this -> fecharCarrinho();
            $this -> calcularFrete();
            $this -> fecharPedido();
        }

        public function fecharCarrinho() {
            $carrinho = new Carrinho;
            $carrinho -> fecharCarrinho();
            echo "<br/>";
        }

        public function calcularFrete() {
            $frete = new Frete;
            $frete -> calcularFrete();
            echo "<br/>";
        }

        public function fecharPedido() {
            $pedido = new Pedido;
            $pedido -> fecharPedido();
            echo "<hr/>";
        }
            /* Este seria o padrão de projeto Facade */
    }

    $loja = new Loja;
    $loja -> finalizarCompra();
?>
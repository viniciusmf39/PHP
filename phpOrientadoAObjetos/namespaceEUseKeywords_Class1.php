<?php
    // namespace --> serve para dividir nossas classes em sessões
    namespace Sessao1;
    use Sessao2\Class2; // Dessa forma posso remover a \Sessao2\ de new \Sessao2\Class2()

    class Class1 {
        function __construct() {
            echo "Classe 1 instânciada!<br/>";
            new Class2;
        }
    }
?>
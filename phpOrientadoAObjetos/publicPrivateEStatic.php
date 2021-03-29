<?php
    include('publicPrivateEStatic_Class.php');

    # Instânciando o objeto que foi exportado
    $exemplo = new Exemplo; // O objeto exemplo está dentro do arquivo 'publicPrivateEStatic_Class.php'

    // $exemplo -> var1 = 'Olá'; // Neste caso dará erro pois a $var1 é privada
    $exemplo -> var2 = 'Killua'; // Desta forma irá funcionar pois a var2 é publica
    echo $exemplo -> var2; // As variáveis dentro de objetos são acessadas sem o '$'
    echo "<hr/>";

    $exemplo2 = new Exemplo;
    $exemplo2 -> var2 = 'Gon'; // Desta forma irá funcionar pois a var2 é publica
    echo $exemplo2 -> var2; // As variáveis dentro de objetos são acessadas sem o '$'
    echo "<hr/>";

    # STATIC: atributos e métodos static ficam inicessíveis através do objeto
    // echo $exemplo -> var3; // Vai dar erro
    echo Exemplo::$var3; // Essa é a forma utilizada para chamar atributos estáticos (static)
    echo '<hr/>';

    Exemplo::$var3 = 'Saitama';
    echo Exemplo::$var3;
    echo '<hr/>';

    echo Exemplo::staticFunction();
    echo '<hr/>';

    // echo $exemplo -> calculadoraSimples(10, '+', 2);
    $exemplo -> setVar1('Yu-Gi-Oh');
    echo $exemplo -> pegaVar1();
?>
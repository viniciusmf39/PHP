<?php
    include('metodosMagicos_Class1.php');

    $teste = new Class1('Meliodas', 3000); // Ao instanciar o objeto o primeiro método que ele irá procurar é o __construct (__construct é um método que eu não preciso chamar)

    echo $teste -> getNome();
    echo '<hr />';
    echo $teste -> getIdade();
?>
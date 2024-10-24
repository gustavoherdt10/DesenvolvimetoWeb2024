<?php

    require_once "ex1_aula14pt1.php";

    $calculadora = new Calculadora();

    $calculadora->setOperador1(10);
    $calculadora->setOperador2(10);
    $calculadora->setOperadorando('+');
    $calculadora->calcula();

    echo $calculadora->escreveResultado();
?>
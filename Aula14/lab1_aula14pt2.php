<?php

    require_once "lab1_aula14.php";

    $calculadora = new Calculadora();

    $calculadora->setOperador1(10);
    $calculadora->setOperador2(10);
    $calculadora->setOperadorando('+');
    $calculadora->calcula();

    echo $calculadora->escreveResultado();
?>
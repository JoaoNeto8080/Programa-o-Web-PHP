<?php
    $nome = $_POST["nome"];
    $valo1 = $_POST["valor1"];
    $valo2 = $_POST["valor2"];
    $soma = $valo1 + $valo2;
    $Divisão = $valo1 / $valo2;
    $Subtração = $valo1 * $valo2;
    echo "Seja Bem Vindo $nome - Soma: $soma Divisão: $Divisão Subtração: $Subtração";    
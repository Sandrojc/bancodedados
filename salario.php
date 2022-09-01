<?php

$salario = $_POST["salario"];

$percentual = 8 / 100.0;

$desconto = ($percentual * $salario);

$salario_liquido = ($salario - $desconto);

echo "O desconto de 8% é: " , number_format($desconto,2), "<br/>"; 

echo "O valor líquido do Salário é: " , number_format($salario_liquido,2);
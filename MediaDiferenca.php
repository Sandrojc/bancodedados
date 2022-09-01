<?php

$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];

$media = ($nota1 + $nota2)/2;

$diferenca = ($nota1 - $nota2)/2;

echo nl2br("A Média Aritimética é: $media \n \n A Metade da Diferença é: $diferenca");

?>
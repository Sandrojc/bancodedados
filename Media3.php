<?php

$nta1 = $_POST["nota1"];
$nta2 = $_POST["nota2"];
$nta3 = $_POST["nota3"];

$media = ($nta1 + $nta2 + $nta3)/3;

echo "A Média Aritimética é: " , number_format($media,1);
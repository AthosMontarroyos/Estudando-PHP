<?php 

for ($numero = 1; $numero <= 100; $numero++) {
    echo "\n$numero";
    $numero++;
}

$Peso = 62.5;
$Altura = 1.54;
$AlturaElevada = $Altura**2;
echo "\n$AlturaElevada";
$IMS = $Peso/$AlturaElevada;
echo "\n$IMS";

$Horario = 18;
if (
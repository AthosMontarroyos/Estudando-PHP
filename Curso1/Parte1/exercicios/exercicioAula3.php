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

$Hora = 13;
if ($Hora >= 6 && $Hora < 12) {
    echo "\nBom Dia";
} else if($Hora >= 12 && $Hora < 18) {
    echo "\nBoa Tarde";
} else if ($Hora >= 18 && $Hora < 24) {
    echo "\nBoa Noite";
} else {
    echo "\nBoa Madrugada";
}
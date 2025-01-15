<?php

$nome = "Nathy";
echo $nome;

$notas = 8+7+9;
$media = $notas / 3;
echo "\n$notas";
echo "\n$media";

$metros = 3;
$metrosEmCentimetros = $metros*100;
echo "\n$metros metros";
echo "\n$metrosEmCentimetros Centimetros";

$numeroDeDias = 365;
if ($numeroDeDias == 366 ) {
    $anoBissexto = true;
} else {
    $anoBissexto = false;
};
if ($anoBissexto == true) {
    echo "\nEste é um ano bissexto";
} else {
    echo "\nEste não é um ano bissexto";
}

$celsius = 20;
echo "\n$celsius Graus";
$celsiusEmFahrenheit = ($celsius * 9/5) + 32;
echo "\n$celsiusEmFahrenheit Fahrenheits";


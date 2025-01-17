<?php

echo "Bem Vindo(a) ao Anime Match!\n";


$nomeAnime = "RE:ZERO";
$nomeAnime = "Sou Sou No Frieren";
$nomeAnime = "SoloLeveling";

$anoLancamento = 2024;
$somaDeNotas = 0;

for ($contador = 1; $contador < $argc; $contador++ ) {
    $somaDeNotas += $argv[$contador];
    
}

$numeroDeNotas = $argc - 1;
$notaAnime = $somaDeNotas / $numeroDeNotas;





$planoprime = true;
$incluidoNoPlano = $planoprime || $anoLancamento < 2020;

echo "NomeDoAnime: $nomeAnime \nNotaDoAnime: $notaAnime\nAnoDeLançamento: $anoLancamento";

if ($anoLancamento >= 2024) {
    echo "\nEste anime é um lançamento";
} else if ($anoLancamento >= 2020) {
    echo "\nEste anime é Novo";
} else if ($anoLancamento >= 2010) {
    echo "\nEste anime não é tão recente assim";
} else {
    echo "\nEste anime é antigo";
}


$genero = match ($nomeAnime) {
     "SoloLeveling" => "Ação",
     "Sou Sou No Frieren" => "Fantasia",
     "RE:ZERO" => "Isekai",
     default => "Desconhecido"
}; 

echo "\nO genero é $genero";

echo "\n$argc";

<?php

echo "Bem Vindo(a) ao Anime Match!\n";


$nomeAnime = "RE:ZERO";
$nomeAnime = "Sou Sou No Frieren";
$nomeAnime = "SoloLeveling";

$anoLancamento = 2024;

$quantidadeDeNotas = $argc - 1;
$notas =[];

for ($contador = 0; $contador < $argc; $contador++) {
   $notas[] = (float) $argv[$contador];    
}
var_dump($notas);

$notaAnime = array_sum($notas) / $quantidadeDeNotas;

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

echo "\n$argc\n";

/*$NotasRecebidas = [4.5, 5, 2.8, 2.7, 3.5, 4.7];

var_dump($NotasRecebidas);*/

$AnimeShingeki = [
    "nome" => "Shingeki No Kyojin",
    "Lançamento" => 2009,
    "Categoria" => "Suspence",
    "Nota" => 4.7,
];

echo $AnimeShingeki['nome'];
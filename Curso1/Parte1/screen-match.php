<?php

echo "Bem Vindo(a) ao Anime Match!
";

$nomeAnime = "SoloLeveling";
$anoLancamento = $argv[1] ?? 2024;
$somaDeNotas = (5+3+2+5+4);
$notaAnime = $somaDeNotas / 5;
$incluidoNoPlano = true;


echo "NomeDoFilme: $nomeAnime \nNotaDoFilme: $notaAnime\nAnoDeLançamento: $anoLancamento";

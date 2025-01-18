<?php 
function removerDuplicados($array) {
    $arraySemDuplicados = array_unique($array);
    $arrayReorganizado = array_values($arraySemDuplicados);
    return $arrayReorganizado;
}

$entrada = [1, 2, 2, 3, 4, 4, 5];
$resultado = removerDuplicados($entrada);

echo "Array resultante: [" .  implode($resultado) . "]\n";

$notas = [8, 9, 9, 5, 6 ,2];
$media = array_sum($notas) / count($notas);

echo $media;

if($media >= 6) {
    echo "\nAprovado";
} else {
    echo "\nReprovado";
 }


 $Banco = [
    "Nome" => "Athos",
    "Saldo" => 65
 ];

 echo "\nSeu nome é" . $Banco["Nome"];
 echo "\nSeu saldo é de " . $Banco["Saldo"] . "R$";

 $Familiares = [
     "Lailson",
     "Catarina",
     "Rafael",
    "Anna",
     "Athos"
 ];

 array_push($Familiares, "arthur" ) ;

 for ($contador = 0; $contador < count($Familiares); $contador++ ) {
    echo "\n" . $Familiares[$contador];
 }
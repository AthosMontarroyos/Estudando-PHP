<?php

$Saldo = 1000;

do {
echo "\n--------------------------------------------";
echo "\nNome do Titular: ATHOS MONTARROYOS \n";
echo "Saldo Em Conta $Saldo";
echo "\n--------------------------------------------";
echo "\nDigite um Numero para";
echo "\n1 Consultar Saldo";
echo "\n2 Sacar";
echo "\n3 Depositar";
echo "\n4 Sair\n";
$numeroColocado = (float) fgets(STDIN);

if ($numeroColocado == 1) {
   echo "\n--------------------------------------------";
       echo "\nSeu Saldo atual é: $Saldo"; 
   } else if ($numeroColocado == 2) {
      echo "\n--------------------------------------------";
      echo "\n Quanto você quer Sacar?\n";
      $NumeroSacado =  (float) fgets(STDIN);
         if ($NumeroSacado > $Saldo) {
            echo "\n--------------------------------------------";
            echo "Você Não Poder Sacar mais do que você tem ;)";
         } else if ($NumeroSacado < 0) {
            echo "\n--------------------------------------------";
             echo "ERRO NUMERO SACADO N PODER SER MENOR QUE ZERO";
         } else {
            $SaldoAtual = $Saldo - $NumeroSacado;
            $Saldo = $SaldoAtual;
         }
   } else if ($numeroColocado == 3) {
      echo "\n--------------------------------------------";
         echo "\nQuanto Você Quer Depositar?\n";
         $Saldo += (float) fgets(STDIN);
      } 

      else if ($numeroColocado > 4) {
         echo "\n--------------------------------------------";
         echo "Numero Invalido";
      } else if ($numeroColocado < 0) {
         echo "\n--------------------------------------------";
         echo "Numero Invalido";
      }
   } while($numeroColocado !=4);
    echo "Tchauzinho"
 







?>
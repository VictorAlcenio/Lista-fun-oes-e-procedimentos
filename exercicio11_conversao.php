<?php

#Crie uma função que realize a conversão de Polegadas (pol) para Centímetros (cm),
#onde pol é passado como parâmetro e cm é retornado. Sabe-se que 1 polegada tem
#2.54 centímetros. Crie também um programa para testar tal função.


function conversao ($polegadas) {
    $centimetros = $polegadas * 2.54;
    return $centimetros;
}

print "Digite o valor em polegadas: ";
$polegadas = (float)fgets(STDIN);
print  conversao ($polegadas);

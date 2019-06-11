<?php

#Faça uma função que calcule a hipotenusa. Os catetos são os dados de entrada e a
#hipotenusa é o dado de saída.

function hipotenusa ($catetoA,$catetoO) {
    $hipotenusa = sqrt(pow($catetoA,2) + pow($catetoO,2));
    return $hipotenusa;
}

print "Digite o valor do cateto adjacente: ";
$catetoA = (float) fgets (STDIN);

print "Digite o valor do cateto oposto: ";
$catetoO = (float) fgets (STDIN);

$hipotenusa = hipotenusa($catetoA,$catetoO);
print "O valor da hipotenusa é: $hipotenusa \n";

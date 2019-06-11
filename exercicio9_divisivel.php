<?php

#Escreva uma função que receba dois números inteiros x e y. Essa função deve
#verificar se x é divisível por y. No caso positivo, a função deve retornar 1, caso
#contrário zero. Escreva também um programa para testar tal função.


function numero ($numx,$numy) {
        $modulodiv = $numx%$numy;

        if ($modulodiv == 0) {
            return "1 \n";
        }

        else {
            return "0 \n";
        }
}

print "Digite um número: ";
$numx = (int)fgets(STDIN);

print "Digite outro número: ";
$numy = (int)fgets(STDIN);

print numero ($numx,$numy);


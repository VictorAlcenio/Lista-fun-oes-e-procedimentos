<?php

#Escreva uma função que receba um número natural e imprima os três primeiros
#caracteres do dia da semana correspondente ao número. Por exemplo, 7 corresponde
#a “SAB”. O procedimento deve mostrar uma mensagem de erro caso o número
#recebido não corresponda a um dia da semana. Gere também um programa que
#utilize essa função, chamando-a, mas antes lendo um valor para passagem de
#parâmetro.

function dia ($dia) {
    switch ($dia){
            case 1:
                print "DOM" . "\n";
                break;
            case 2:
                print "SEG" . "\n";
                break;
            case 3:
                print "TER" . "\n";
                break;
            case 4:
                print "QUA" . "\n";
                break;
            case 5:
                print "QUI" . "\n";
                break;
            case 6:
                print "SEX" . "\n";
                break;
            case 7:
                print "SAB" . "\n";
                break;
            default;
                print "\n Digite um número válido (1 a 7)";
        }
}
print "Digite um número: ";
$dia = (int)fgets(STDIN);
print dia ($dia);

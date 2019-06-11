<?php

#Escreva uma função que receba um número inteiro e imprima o mês correspondente
#ao número. Por exemplo, 2 corresponde a “fevereiro”. O procedimento deve mostrar
#uma mensagem de erro caso o número recebido não faça sentido. Gere também um
#programa que leia um valor e chame a função criada.


function meses ($mes){
    switch ($mes){
            case 1: 
            print "Janeiro" . "\n";
            break;

            case 2: 
            print "Fevereiro" . "\n";
            break;

            case 3: 
            print "Março" . "\n";
            break;

            case 4: 
            print "Abril" . "\n";
            break;
    
            case 5: 
            print "Maio" . "\n";
            break;
    
            case 6: 
            print "Junho" . "\n";
            break;
    
            case 7: 
            print "Julho" . "\n";
            break;
    
            case 8: 
            print "Agosto" . "\n";
            break;
    
            case 9: 
            print "Setembro" . "\n";
            break;
        
            case 10: 
            print "Outubro" . "\n";
            break;

            case 11: 
            print "Novembro" . "\n";
            break;
            
            case 12: 
            print "Dezembro" . "\n";
            break;
           
            default: 
            print "número invalido" . "\n";
            break;

    }
}

print "Digite um número: ";
$numero = (int) fgets (STDIN);

meses($numero);

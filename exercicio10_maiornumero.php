<?php

#Criar uma função que calcule e retorne o MAIOR entre dois valores recebidos como
#parâmetros. Um algoritmo para testar tal função deve ser criado.

function maiornumero ($numero1,$numero2) {
    if ($numero1 > $numero2) {
        return "O maior número digitado é: $numero1 \n";
    }
    else {
        return "O maior número digitado é: $numero2 \n";
    }
}


print "Digite o primeiro número: ";
$numero1 = (int)fgets(STDIN);
print "Digite o segundo número: ";
$numero2 = (int)fgets(STDIN);

print maiornumero ($numero1,$numero2);

<?php

#Escreva um programa para ler as notas das duas avaliações de um aluno no semestre.
#Faça uma função que receba as duas notas por parâmetro e calcule e escreva a média
#semestral e a mensagem “PARABÉNS! Você foi aprovado!” somente se o aluno foi
#aprovado (considere 6.0 a média mínima para aprovação).

function media ($nota1,$nota2){
    $media = (($nota1+$nota2) / 2);
    

    If ($media>=6) {
        print "PARABÉNS! Você foi aprovado! \n";
    }

    else{
        print "Você foi reprovado. \n";
    }
    return $media;
}

print "Digite a 1º nota: ";
$nota1 = (float) fgets (STDIN);


print "Digite a 2º nota: ";
$nota2 = (float) fgets (STDIN);


$media = media ($nota1,$nota2);
print "A média semestral é: $media \n";

        

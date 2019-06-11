<?php

#Escreva um programa para ler o número de lados de um polígono regular e a medida
#do lado (em cm). Faça uma função que receba como parâmetro o número de lados e
#a medida do lado deste polígono e calcule e imprima o seguinte:
#• Se o número de lados for igual a 3, escrever TRIÂNGULO e o valor do seu
#perímetro.
#• Se o número de lados for igual a 4, escrever QUADRADO e o valor da sua área.
#• Se o número de lados for igual a 5, escrever PENTÁGONO.


function poligono ($lados,$tamanho) {
    if ($lados == 3) {
        $tipo = "Triangulo";
        $perimetro = $lados * $tamanho;
        return $poligono = [$perimetro,$tipo];
    }
            elseif ($lados == 4) {
                $tipo = "Quadrado";
                $area = $tam ** 2;
                return $poligono = [$area,$tipo];
            }
                    elseif ($lados == 5) {
                        $tipo = "Pentágono";
                        return $tipo;
                    }
}

print "Digite a quantidade de lados: ";
$lados = (int)fgets(STDIN);
if ($lados == 5) {
    $poligono = poligono ($lados, 0);
    print "$poligono \n";
}
else {
    print "Digite a medida de um dos lados: ";
$tamanho = (float)fgets(STDIN);
$poligono = poligono ($lados,$tam);
print $poligono[0] . " centímetros. " . $poligono[1] . "\n";
}



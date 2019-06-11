<?php

#Faça uma função para converter uma temperatura em graus Fahrenheit para Celsius. A
#temperatura em Fahrenheit é o dado de entrada e a temperatura em Celsius é o dado
#de saída. Utilize a fórmula C = (F - 32) * 5/9, onde F é a temperatura em Fahrenheit e
#C é a temperatura em Celsius.



    function converter ($temperatura_F)
    {
        $converter = ($temperatura_F - 32) * 5/9;
        return $converter;
    };

    print "Digite a temperatura em Fahrenheit: ";
    $temperatura_F = (float) fgets (STDIN);

    $temperatura_C = converter ($temperatura_F);
    print "A temperatura em Celsius é: $temperatura_C °C "; 




<?php

    primo(10, 29);

    function primo($inicial, $final){
        $count = 0;
        $numeros = array();

        for($i = $inicial + 1; $i < $final - 1; $i++){
            $primo = 1;

            for($j = 2; $j < $i; $j++){
                if($i % $j == 0){
                    $primo--;
                }
            }

            if($primo > 0){
                $count++;
                array_push($numeros, $i);
            }
        }

        if($count > 0){
            if($count == 1){
                echo "Existem {$count} número primo no intervalo informado, sendo ele: {$numeros[0]}";
            }
            else{
                echo "Existem {$count} números primos no intervalo informado, são eles: ";
                for($i = 0; $i < $count; $i++){
                    if($i != $count - 1){
                        echo "{$numeros[$i]}, ";
                    }
                    else{
                        echo "{$numeros[$i]}.";
                    }
                }
            }
        }
        else{
            echo "Não existem números primos no intervalo informado.";
        }
    }

?>
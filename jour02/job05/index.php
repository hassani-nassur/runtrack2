<?php

    for ($i = 2; $i<=1000; $i++){
        $compt = 0;
        
        for ($j=$i; $j >=1;$j--){
            if($i%$j==0){
                $compt++;
            }
        }

        if($compt == 2){
           echo " $i <br>";
        }
    }
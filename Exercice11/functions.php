<?php
    function nombre_premier($nombre){
        $cpt = 1;
        for($i=2; $i<=$nombre; $i++){
            if($nombre % $i == 0)
                $cpt++;
        }
        return $cpt == 2;
    }

    function moyenne($T){
        $som = 0;
        for($i=1; $i<=$T; $i++){
            $som += $i;
        }
        return $som/$T;
    }
?>
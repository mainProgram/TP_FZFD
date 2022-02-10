<!-- Entrer les nombres a,b et  c à l’aide d’un formulaire puis donner les solutions de  l'équation ax2+bx+c=0.Les trois champs sont obligatoires.-->
<?php
    function equation_second_degre($a, $b, $c){
        if($a==0){
            if($b==0){
                if($c==0){
                    return '<h1>On a une infinité de solutions.</h1>';
                }else{
                    return '<h1>Impossible!</h1>';
                }       
            }else{
                return '<h1>On a une solution x ='.(-1*$b)/$c.".</h1>";  
            }     
        }else{
            $delta = $b*$b - (4 * $a * $c);
            if($delta < 0){
                return '<h1>On n\'a pas de solutions.</h1>';
            }else if($delta == 0){
                return '<h1>On n\'a qu\'une solution x0='.((-1*$b)/$a*2).".</h1>";
            }else{
                return '<h1>On a deux solutions x1 ='.((-1*$b)-sqrt($delta)/(2*$a)).' et x2='.((-1*$b)+sqrt($delta)/(2*$a)).".</h1>";       
            }
        }
    }

?>
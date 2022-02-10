<?php
    function dessiner($taille, $position, $color){
        $color1 = $color=="blue" ? "blue" : "red"; 
        $color2 = $color!="blue" ? "blue" : "red"; 
        echo "<table style='border: 1px solid';>";
        for($i=0; $i<$taille; $i++)
        {
            echo "<tr>";
            for($j=0; $j<$taille; $j++)
            if($position == "haut"){
                if($i<$j)
                    echo "<td style='background-color:".$color1."';>a</td>";
                elseif($i>$j)
                    echo "<td style='background-color:".$color2."';>a</td>";
                else
                    echo "<td style='background-color:purple';>a</td>";
            }
            else{
                if($i<$j)
                    echo "<td style='background-color:".$color2."';>a</td>";
                elseif($i>$j)
                    echo "<td style='background-color:".$color1."';>a</td>";
                else
                    echo "<td style='background-color:purple';>a</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    // dessiner(4,"red","blue");
?>
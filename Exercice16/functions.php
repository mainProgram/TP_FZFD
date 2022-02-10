<?php
    //Initialiser un tableau de couleurs formé du code et du nom de la couleur.Ce tableau sera utilisé pour générer les options des champs select
    function colors(){
        return [
            "rouge"  => "red",
            "bleu"   => "blue",
            "jaune"  => "yellow",
            "vert"   => "green",
            "violet" => "purple",
            "blanc"  => "white"
        ];
    }

    function positions(){
        return ["ADDP", "EDDP", "SDP", "ADDS", "EDDS", "SDS",];
    }

    // ○ ADDP, au-dessus de la diagonale principale .  i < j
    // ○ EDDP, en dessous de la diagonale principale i > j
    // ○ SDP,sur la diagonale principale i = j
    // ○ ADDS, au-dessus de la diagonale secondaire . i + j < n - 1
    // ○ EDDS, en dessous de la diagonale secondaire i + j > n - 1
    // ○ SDS,sur la diagonale secondaire i + j == n - 1

    function dessiner($taille, $color1, $color2, $color3, $color4, $color5, $color6){
        echo "<table style='border: 1px solid';>";
        for($i=1; $i<=$taille; $i++)
        {
            echo "<tr>";
            for($j=1; $j<=$taille; $j++){
                if($i<$j)
                    echo "<td style='background-color:".$color1."';>a</td>";
                elseif($i>$j)
                    echo "<td style='background-color:".$color2."';>b</td>";
                elseif($i==$j)
                    echo "<td style='background-color:".$color3."';>c</td>";
                elseif($i+$j < $taille-1)
                    echo "<td style='background-color:".$color4."';>d</td>";
                elseif($i+$j > $taille-1)
                    echo "<td style='background-color:".$color5."';>e</td>";
                elseif($i+$j == $taille-1)
                    echo "<td style='background-color:".$color6."';>f</td>";
            }   
            echo "</tr>";
        }
        echo "</table>";
    }
?>
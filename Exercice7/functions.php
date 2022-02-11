<?php
    function bissextile_or_not($an){
        return ($an % 400 == 0 || ($an % 4 == 0 && $an % 100 != 0));
    }
  
    function nb_jours($mois, $an){
        if($mois == 4 || $mois == 6 || $mois == 9 || $mois == 11)  
            return 30;
        elseif ($mois != 2)
            return 31;
        else 
        {
            if(bissextile_or_not($an))  
                return 29;
            return 28;
        }
    }

    function date_valide_or_not($jour, $mois, $an){
        if(($jour <=0 || $jour > 31 ) || ( $mois <=0 || $mois > 12 ) || $an < 1563) 
            return false;

        else if($mois == 4 || $mois == 6 || $mois == 9 || $mois == 11)  
            return $jour <= 30;

        else if($mois != 2)
            return $jour <= 31;

        else{
            if(bissextile_or_not($an))
                return $jour <= 29;
            return $jour <= 28;
        }
    }

    function date_suivante($jour, $mois, $an){
        $nbJours = nb_jours($mois, $an);
        if($jour < $nbJours) 
            return ($jour + 1)."/".$mois."/".$an;
        else if($mois < 12) 
            return "1/".($mois+1)."/".$an;
        else
            return "1/1/".$an+1;
    }

    function date_precedente($jour, $mois, $an){
        if($jour==1 && $mois>1)
            return nb_jours($mois-1, $an)."/".($mois - 1)."/".$an;

        elseif ($jour==1 && $mois == 1)
            return "31/12/".$an-1;
        
        else
            return ($jour-1)."/".($mois)."/".$an;
    }

    // echo date_valide_or_not(1,3,2016);
    // echo "1,3,2016<br> suivante";
    // echo date_suivante(1,3,2016);
    // echo "<br>Precedente";
    // echo date_precedente(1,3,2016);
?>
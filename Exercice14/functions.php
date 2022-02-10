<?php

function long_chaine($chaine)
{
    $i=0;
    while (isset($chaine[$i]))
        $i+=1; 
    return $i;
}

function divide($string){
    $tab = array();
	$cpt=0;
    $string = trim($string);
	$string = preg_replace("#\s+#"," ",$string); //remove les espaces inutiles du str
    $string .= " ";
    for ($i=0; $i < long_chaine($string) ; $i++) 
	{  
		if(preg_match('#[ ]#', $string[$i])) 
		{
            $phrase = "";
			for ($j=$cpt; $j <$i ; $j++) 
			{ 
                $phrase .= $string[$j]; 
			}
			$cpt=$i+1;
            $tab[] = $phrase;
		}
	}
    return $tab;
}	

function is_num_valid($string){
	return preg_match('#^(78|77|76|75|70|33)[0-9]{7}$#', $string); 
}
?>
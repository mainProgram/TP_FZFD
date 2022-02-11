<!-- <?php

function long_chaine($chaine){
    $i=0;
    while (isset($chaine[$i]))
        $i+=1; 
    return $i;
}

function divide($string){
    $string = trim($string);   // remove les espaces inutiles au debut et a la fin 
	$string = preg_replace("#\s+#"," ",$string); //remove les espaces inutiles du str
	$string .= " ";
    $tab = array(); // mon tableau de phrases obtenus a partir du slice du texte $string
	$cpt=0;			// momey wax fane lay commencer compter phrase yi

    for ($i=0; $i < long_chaine($string)-1 ; $i++) 
	{  
		if(preg_match('#[!\?\.]#', $string[$i]) && $string[$i+1]==" ") //so guissei . wala ! wala ? tu as une phrase
		{
            $phrase = "";
			for ($j=$cpt; $j <=$i ; $j++) 
			{ 
                $phrase .= $string[$j]; 
			}
			$cpt=$i+2; // pour que mou bagna commencer espace ex: Je suis sage. Je sais. 	
															//				$i  $i+2
            $tab[] = $phrase; 
		}
	}
    return $tab;
}	

// print_r(divide("Renseigner le nombre de phrases. Les phrases ne doivent pas contenir des caractères spéciaux. Une phrase commence par lettre majuscule et se termine par un point. Chaque phrase contiendra au moins 25 caractères.  Renseigner le nombre de phrases. "));

function is_string_a_sentence($string){
	return (preg_match('#^[A-Z0-9]#', $string) && preg_match('#[!\?\.]$#', $string));
	// $string = trim($string);
	// $string = preg_replace("#[\s+]#"," ",$string);
	// $string.= " ";
	// $tab = explode(". ", $string);
	// for($i=0; $i<count($tab); $i++)
	// 	$tab[$i].= ".";
	// return $tab;
}
// print_r(is_string_a_sentence("Je suis une phrase. Je suis une phrase... Jesuis sage."));

function is_sentence_correct($string){
	return preg_match('#^[\,\; A-Za-z0-9!\?\.]*$#', $string);
}
?> -->
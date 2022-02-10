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
?>
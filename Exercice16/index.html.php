<!-- Proposer un formulaire avec les éléments suivants :
● Un champ de saisi pour la taille de la matrice carrée (Nombre de lignes)
● Des champs select ayant comme options des couleurs
● Des boutons radio pour la position de la couleur ayant comme valeurs
    ○ ADDP, au-dessus de la diagonale principale .
    ○ EDDP, en dessous de la diagonale principale
    ○ SDP,sur la diagonale principale
    ○ ADDS, au-dessus de la diagonale secondaire .
    ○ EDDS, en dessous de la diagonale secondaire
    ○ SDS,sur la diagonale secondaire
● Un bouton « Dessiner »
Lorsque l’utilisateur clique sur le bouton Dessiner , le script devra dessiner la
matrice en la coloriant suivant les couleurs et les positions choisies par
l’utilisateur.
- Initialiser un tableau de couleurs formé du code et du nom de la couleur.Ce tableau
sera utilisé pour générer les options des champs select .
- Initialiser un tableau de positions formé des valeurs :
    ADDP, au-dessus de la diagonale principale .
    EDDP, en dessous de la diagonale principale
    SDP,sur la diagonale principale
    ADDS, au-dessus de la diagonale secondaire .
    EDDS, en dessous de la diagonale secondaire
    SDS, sur la diagonale secondaire
Ce tableau sera utilisé pour générer les positions d’un champ radio. Le nombre de
champs radio est égal au nombre de couleurs.

- Règles de Gestion
    Le nombre de champ select est égal au nombre de positions de
    coloriage de la matrice.
    Tous les champs sont Obligatoires
    Le champ de saisi de l’ordre de la matrice est un entier et est supérieur
    à 4
    Deux champs select de couleurs ne doivent pas avoir des valeurs identiques
    Deux couleurs ne doivent pas avoir la même position. -->

    <?php 
    session_start(); 
    require_once "functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice16</title>
</head>
<body>
    <section class="container">
        <form action="controller.php" method="post">
            <label for="N"><h1>Entrer la taille de la matrice carrée. Elle doit être supérieure à 4 et inférieure à 101. </h1></label>
            <?php
                if(isset($_GET["nn"]) && $_GET["nn"]==0)
                    echo '<span class="error">La taille de la matrice carrée est invalide !</span>';
            ?>
            <input type="text" name="N" id="N" value="<?php if(isset($_SESSION['N'])) {echo $_SESSION['N'];} ?>">
            <label for=""></label>
            <input type="submit" value="Envoyer" name="envoi">

            <?php
                if(isset($_GET["nn"]) && ($_GET["nn"]==1 || $_GET["nn"]==2)){
                echo 
                    '<h1>La couleur de la position ADDP, au-dessus de la diagonale principale</h1>
                     <h1>La couleur de la position EDDP, en dessous de la diagonale principale</h1>
                     <h1>La couleur de la position SDP,     sur la diagonale principale</h1>
                     <h1>La couleur de la position ADDS, au-dessus de la diagonale secondaire</h1>
                     <h1>La couleur de la position EDDS, en dessous de la diagonale secondaire</h1>
                     <h1>La couleur de la position SDS, sur la diagonale secondaire</h1>
                    <section class="radios">
                        <input type="radio" checked name="position" id="position" value="haut">
                        <label for="position">ADDP</label>
                        <input type="radio" name="position" id="position" value="bas">
                        <label for="position">Bas</label>
                    </section>
                    <input type="submit" value="Dessiner" name="dessiner">';
                if(isset($_SESSION['N']) && isset($_SESSION['position']) && isset($_SESSION['color'])){
                    echo "<h1>La matrice carrée d'ordre ".$_SESSION['N']."</h1>";
                    dessiner($_SESSION['N'],$_SESSION['position'],$_SESSION['color']);
                }
            }
            ?>
            <input type="submit" value="retour" name="retour" class="retour">
        </form>
    </section>
<?php session_destroy(); ?>

</body>
</html>
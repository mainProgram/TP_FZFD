<!-- Proposer un formulaire avec les éléments suivants :
● Un champ de saisi pour la taille de la matrice carrée (Nombre de lignes)
● Deux champs select avec comme options Bleu et Rouge
● Deux boutons radio pour la position de la couleur Bleu (HAUT ou BAS).
● Un bouton « Dessiner »
Lorsque l’utilisateur clique sur le bouton Dessiner , le script devra dessiner la
matrice en la coloriant suivant les couleurs et les positions choisies par
l’utilisateur.
Règles de Gestion
    Haut correspond aux éléments se situant au dessus de la diagonale principale
    Bas correspond aux éléments se situant en dessous de la diagonale principale
    Tous les champs sont Obligatoires
    Le champ de saisi de l’ordre de la matrice est un entier et est supérieur à 5 -->

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
    <title>Exercice15</title>
</head>
<body>
    <section class="container">
        <form action="controller.php" method="post">
            <label for="N"><h1>Entrer la taille de la matrice carrée. Elle doit être supérieure à 5 et inférieure à 101. </h1></label>
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
                    '<h1>Sélectionnez la couleur</h1>
                    <select name="color">
                        <option value="red">Rouge</option>
                        <option value="blue">Bleu</option>
                    </select>
                    <h1>La position de la couleur</h1>
                    <section class="radios">
                        <input type="radio" checked name="position" id="position" value="haut">
                        <label for="position">Haut</label>
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
            <section class="buttons">
                <input type="submit" value="Exercice précédent" name="retour" class="retour">
                <input type="submit" value="Exercice suivant" name="suivant" class="suivant">
            </section>
        </form>
    </section>
<?php session_destroy(); ?>

</body>
</html>
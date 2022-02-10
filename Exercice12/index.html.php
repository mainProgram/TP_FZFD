<!-- Écrire un script qui génère un tableau des 12 mois de l'année en Français
et en Anglais puis affiche ces mois dans tableau HTML.Ce script donne la
possibilité à l’utilisateur de choisir une langue puis affichera les mois de
la langue sélectionnée.
Règles de Gestion
    Par défaut le Table HTML affiche les mois en Français
    La Table HTML des mois doit être affiché comme ci dessous--->

<?php 
    require_once "functions.php";
    session_start(); 
    //Pour la premiere fois le programme doit afficher le tableau des mois en francais d'ou l'initialisation de la variable nn à 0 et le remplissage de la session francais avec le tableau des mois en francais.
    $nn = 0;  $_SESSION['francais'] = francais();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice12</title>
</head>
<body>
    <section class="container">
        <form action="controller.php" method="post">
            <?php
                if(isset($_GET['nn']) && $_GET['nn']==1 && isset($_SESSION['english'])){
                    echo "<table>  
                            <tr><th colspan='4'>Board of the 12 months in the year</th></tr>
                            <tr>";
                    for($i=0; $i<12; $i++){
                        if($i % 4 == 0) // A chaque 4 nouveaux mois crée une nouvelle ligne pour le tableau.
                            echo "<tr>";
                        echo "<td>".$_SESSION["english"][$i]."</td>";
                    }
                    echo "</table>";
                }
                elseif((isset($_GET['nn']) && $_GET['nn']==0) || $nn == 0){
                    echo "<table>  
                            <tr><th colspan='4'>Tableau des 12 mois de l'année</th></tr>
                            <tr>";
                    for($i=0; $i<12; $i++){
                        if($i % 4 == 0)
                            echo "<tr>";
                        echo "<td>".$_SESSION["francais"][$i]."</td>";
                    }
                    echo "</table>";
                }
            ?>
            <section class="buttons">
                <input type="submit" value="Francais" name="francais">
                <input type="submit" value="English" name="english">
            </section>
        </form>
    </section>
<?php session_destroy(); ?>
</body>
</html>
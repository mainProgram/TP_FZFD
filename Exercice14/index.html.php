<!-- Écrire un script qui permet de remplir N de numéros à partir
d’un champ TextArea. Le script ré-affiche les numéros valides dans un
TextArea et les non valides dans un autre TextArea . Le script affichera
aussi le nombre de numéros de chaque opérateur .
Les TextArea des numéros valides et invalides sont à lecture seule.
Règles de Gestion
    Le champ TextArea de saisie des numéros est Obligatoire
    Les numéros doivent être valides.
    Un numéro est valide :
    ○ s’il commence par 77,78,76, -->

    <?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice13</title>
</head>
<body>
    <section class="container">
        <form action="controller.php" method="post">
            <label for="N"><h1>Renseigner le nombre de numéros de téléphone.<br> Les numéros doivent être valides. Un numéro est valide s’il commence par 77, 78, 76, 75, 70 ou 33.<br> Veuillez les séparer par un espace.</h1></label>
            <?php
                if(isset($_GET["nn"]) && $_GET["nn"]==0)
                    echo '<span class="error">Le nombre de numéros de téléphone est invalide !</span>';
            ?>
            <section class="buttons">
                <input type="text" name="N" id="N" value="<?php if(isset($_SESSION['N'])) {echo $_SESSION['N'];} ?>">
                <input type="submit" value="Envoyer" name="envoi">
            </section>
            <section>
                <?php 
                    if(isset($_GET["nn"]) && ($_GET["nn"]==1 || $_GET["nn"]==2 || $_GET["nn"]==3)){
                        if(isset($_GET["nn"]) && $_GET["nn"]==3) echo '<span class="error">'.$_SESSION['nbNumerosIncorrect'].'</span><br>';
                        echo '<form action="controller.php" method="post">';
                        echo '<section class="textareas">';
                        echo "<section>";
                        echo '<h1>Renseigner les '.$_SESSION['N'].' numéros de téléphone ici s\'il vous plaît !</h1>';
                        echo '<textarea cols="35" rows="20" name="numeros">';
                            if(isset($_GET["nn"]) && $_GET["nn"]==2){
                                for($i=0; $i < count($_SESSION["tabNumerosSaisis"]);$i++)
                                    echo $_SESSION["tabNumerosSaisis"][$i]." ";
                            }
                        echo "</textarea>";
                        echo "</section>";
                        echo "<section>";
                        echo '<h1>Tableau des numéros corrects</h1>';
                        echo '<textarea readonly cols="35" rows="20">';
                            if(isset($_GET["nn"]) && $_GET["nn"]==2){
                                if($_SESSION["tabNumerosCorrects"] != NULL){
                                    for($i=0; $i < count($_SESSION["tabNumerosCorrects"]);$i++)
                                        echo $_SESSION["tabNumerosCorrects"][$i]." ";
                                }else  
                                    echo 'Il n\'y a aucun numéro correct !';
                            }
                        echo "</textarea>";
                        echo "</section>";

                        echo "<section>";
                        echo '<h1>Tableau des numéros incorrects</h1>';
                        echo '<textarea readonly cols="35" rows="20">';
                        if(isset($_GET["nn"]) && $_GET["nn"]==2){
                            if($_SESSION["tabNumerosIncorrects"] != NULL){
                                for($i=0; $i < count($_SESSION["tabNumerosIncorrects"]);$i++)
                                    echo $_SESSION["tabNumerosIncorrects"][$i]." ";        
                            }else  
                                echo 'Il n\'y a aucun numéro incorrect !';
                        }
                        echo "</textarea>";
                        echo "</section>";
                        echo "</section>";
                        echo '<input type="submit" value="Soumettre" name="soumettre">';
                        echo "</form>";
                    }
                ?>
            </section>
            <input type="submit" value="suivant" name="suivant" class="suivant">
            <input type="submit" value="retour" name="retour" class="retour">
        </form>
    </section>
<?php session_destroy(); ?>

</body>
</html>
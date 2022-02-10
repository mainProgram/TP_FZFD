<!-- Écrire un programme qui permet de remplir N phrases à partir d’un
champ TextArea.Le programme enlève tous les espaces inutiles de chaque
phrase puis réaffiche les phrases corrigées dans un autre TextArea.
Les TextArea des phrases corrigées sont à lecture seule.
Règles de Gestion
    Le champ TextArea de saisie des phrases est Obligatoire
    Les phrases ne doivent pas contenir des caractères spéciaux
    Une phrase commence par lettre majuscules et se termine par un point
    Chaque phrase contiendra au moins 25 caractères -->

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
            <label for="N"><h1>Renseigner le nombre de phrases. Les phrases ne doivent pas contenir des caractères spéciaux. Une phrase commence par lettre majuscule et se termine par un point. Chaque phrase contiendra au moins 25 caractères.</h1></label>
            <?php
                if(isset($_GET["nn"]) && $_GET["nn"]==0)
                    echo '<span class="error">Le nombre de phrases est invalide !</span>';
            ?>
            <section class="buttons">
                <input type="text" name="N" id="N" value="<?php if(isset($_SESSION['N'])) {echo $_SESSION['N'];} ?>">
                <input type="submit" value="Envoyer" name="envoi">
            </section>
            <section>
                <?php 
                    if(isset($_GET["nn"]) && ($_GET["nn"]==1 || $_GET["nn"]==2 || $_GET["nn"]==3))
                    {
                        if(isset($_GET["nn"]) && $_GET["nn"]==3) 
                            echo '<span class="error">'.$_SESSION['nbPhrasesIncorrect'].'</span><br>';
                            
                        echo '<form action="controller.php" method="post">';
                            echo '<section class="textareas">';
                                echo '<textarea cols="70" rows="20" placeholder="  Renseigner les '.$_SESSION['N'].' phrases ici s\'il vous plaît !" name="phrases">';
                                    if(isset($_GET["nn"]) && $_GET["nn"]==2){
                                        for($i=0; $i < count($_SESSION["tabPhrasesSaisies"]);$i++)
                                            echo $_SESSION["tabPhrasesSaisies"][$i]." ";
                                    }
                                echo "</textarea>";

                                echo '<textarea readonly cols="70" rows="20">';
                                    if(isset($_GET["nn"]) && $_GET["nn"]==2){
                                        if($_SESSION["tabPhrasesCorrectes"] != NULL)
                                        {
                                            for($i=0; $i < count($_SESSION["tabPhrasesCorrectes"]);$i++)
                                                echo $_SESSION["tabPhrasesCorrectes"][$i]." ";
                                        }
                                        else  
                                            echo 'Il n\'y a aucune phrase correcte !';
                                    }
                                echo "</textarea>";
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
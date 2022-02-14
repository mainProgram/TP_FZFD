<!-- Le nombre N est saisi à l’aide d’un formulaire et on génère les
N champs inputs . N est positif. -->

<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice10</title>
</head>
<body>
    <div class="container">
        <form action="controller.php" method="post">
            <label for="N">Le nombre N est saisi à l’aide d’un formulaire et on génère les N champs inputs. N est positif. </label>
            <?php
                if(isset($_GET["nn"]) && $_GET["nn"]==0)
                    echo '<span class="error">N est invalide !</span>';
            ?>
            <input type="text" name="N" id="N" value="<?php if(isset($_SESSION['N'])) {echo $_SESSION['N'];} ?>">
            <label for=""></label>
            <input type="submit" value="Envoyer" name="envoi">
            <?php 
                if(isset($_GET["nn"]) && $_GET["nn"]==1){
                    for($i=1; $i<=$_SESSION['N']; $i++){
                        echo "<input type='text' value = '".$i."'>";
                    }
                }
            ?>
             <section class="buttons">
                <input type="submit" value="Exercice précédent" name="retour" class="retour">
                <a href="../accueil.html.php">Menu</a>
                <input type="submit" value="Exercice suivant" name="suivant" class="suivant">
            </section>
        </form>
    </div>
<?php session_destroy(); ?>

</body>
</html>
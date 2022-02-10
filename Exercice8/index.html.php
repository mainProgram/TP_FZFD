<!-- Exercice 8: Entrer un nombre N à l’aide d’un formulaire puis générer une
liste ul dont les li affichent toutes les valeurs entre 1 et N. N est positif. -->

<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice8</title>
</head>
<body>
    <div class="container">
        <form action="controller.php" method="post">
            <label for="N"><h2>Saisir un nombre N pour générer une liste ul dont les li affichent toutes les valeurs entre 1 et N. N est positif et inférieur à 750.</h2></label>
            <?php
                if(isset($_GET["nn"]) && $_GET["nn"]==0)
                    echo '<span class="error">N est invalide</span>';
            ?>
            <input type="text" name="N" id="N" value="<?php if(isset($_SESSION['N'])) {echo $_SESSION['N'];} ?>">
            <label for=""></label>
            <input type="submit" value="Envoyer" name="envoi">
            <?php if(isset($_GET["nn"]) && $_GET["nn"]==1){
                echo "<ul>";
                for($i=1; $i<=$_SESSION['N']; $i++){
                    echo "<li>".$i."</li>\t";
                }
                echo "</ul>";
                }
            ?>
        </form>
    </div>
<?php session_destroy(); ?>

</body>
</html>
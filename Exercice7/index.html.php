<!-- Entrer une date (jour/mois/année) à l’aide d’un formulaire
,puis déterminer et afficher la date suivante et la date précédente.Le
champ est obligatoire. -->

<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice7</title>
</head>
<body>
    <div class="container">
        <form action="controller.php" method="post">
            <?php if(isset($_SESSION['suivante']) && $_SESSION['suivante']!="") { echo "<h1>La date suivante est : ".$_SESSION['suivante']."</h1>";} ?>
            <?php if(isset($_SESSION['precedente']) && $_SESSION['precedente']!="") { echo "<h1>La date précédente est : ".$_SESSION['precedente']."</h1>";} ?>

            <label for="jour">Jour</label>
            <?php
                if(isset($_GET["jj"]) && $_GET["jj"]==0)
                    echo '<span class="error">Invalide</span>';
            ?>
            <input type="text" name="jour" id="jour" value="<?php if(isset($_SESSION['jour'])) {echo $_SESSION['jour'];} ?>">

            <label for="mois">Mois</label>
            <?php
                if(isset($_GET["mm"]) && $_GET["mm"]==0)
                    echo '<span class="error">Invalide</span>';
            ?>
            <input type="text" name="mois" id="mois" value="<?php if(isset($_SESSION['mois'])) {echo $_SESSION['mois'];} ?>">

            <label for="c">Année</label>
            <?php
                if(isset($_GET["aa"]) && $_GET["aa"]==0)
                    echo '<span class="error">Invalide</span>';
            ?>
            <input type="text" name="an" id="an" value="<?php if(isset($_SESSION['an'])) {echo $_SESSION['an'];} ?>">
            
            <label for=""></label>
            <input type="submit" value="Envoyer" name="envoi">
            <input type="submit" value="suivant" name="suivant" class="suivant">
            <input type="submit" value="retour" name="retour" class="retour">
        </form>
    </div>
<?php session_destroy(); ?>

</body>
</html>
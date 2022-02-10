<!-- Écrire un script qui demande une valeur supérieure à 10 000 à partir d’un
champ de texte puis crée un tableau associatif T avec les clés
premier,supérieur et inférieur après validation de l’utilisateur.
● La clé premier est associée à l’ensemble des nombres premiers
compris entre 1 et la valeur entrée.
● La clé inférieur est associée à l’ensemble des valeurs qui sont
inférieures à la moyenne du tableau
● La clé supérieure est associée à l'ensemble des valeurs qui sont
supérieures à la moyenne.
Les nombres premiers , supérieurs à la moyenne et inférieur à la moyenne
seront affichés respectivement dans des tableaux HTML. -->

<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice11</title>
</head>
<body>
    <div class="container">
        <form action="controller.php" method="post">
            <label for="N"><h1>Le nombre N est une valeur supérieure à 10 000.</h1></label>
            <?php
                if(isset($_GET["nn"]) && $_GET["nn"]==0)
                    echo '<span class="error">N est invalide</span>';
            ?>
            <input type="text" name="N" id="N" value="<?php if(isset($_SESSION['N'])) {echo $_SESSION['N'];} ?>">
            <label for=""></label>
            <input type="submit" value="Envoyer" name="envoi">
            <?php 
                if(isset($_SESSION['T']['premiers']) && count($_SESSION['T']['premiers'])!= 0){
                    echo "<h1>Tableau des nombres premiers compris entre 1 et ".$_SESSION['N']."</h1>";
                    echo "<table>";
                    echo "<tr>";
                    for($i=0; $i<count($_SESSION['T']['premiers']); $i++){
                        if($i % 30 == 0)
                        echo "<tr>";
                        if($i % 60 == 0)
                        echo "</tr>";
                        echo "<td>".$_SESSION['T']["premiers"][$i]."</td>";
                    }
                    echo "</tr>";
                    echo "</table>";
                }
                if(isset($_SESSION['T']['inferieurs']) && count($_SESSION['T']['inferieurs'])!= 0){
                    echo "<h1>Tableau des nombres inférieurs à la moyenne ".$_SESSION['T']['moyenne']."</h1>";
                    echo "<table>";
                    echo "<tr>";
                    for($i=0; $i<count($_SESSION['T']['inferieurs']); $i++){
                        if($i % 30 == 0)
                        echo "<tr>";
                        if($i % 60 == 0)
                        echo "</tr>";
                        echo "<td>".$_SESSION['T']["inferieurs"][$i]."</td>";
                    }
                    echo "</tr>";
                    echo "</table>";
                }
                if(isset($_SESSION['T']['superieurs']) && count($_SESSION['T']['superieurs'])!= 0){
                    echo "<h1>Tableau des nombres supérieurs à la moyenne ".$_SESSION['T']['moyenne']."</h1>";
                    echo "<table>";
                    echo "<tr>";
                    for($i=0; $i<count($_SESSION['T']['superieurs']); $i++){
                        if($i % 30 == 0)
                        echo "<tr>";
                        if($i % 60 == 0)
                        echo "</tr>";
                        echo "<td>".$_SESSION['T']["superieurs"][$i]."</td>";
                    }
                    echo "</tr>";
                    echo "</table>";
                }
            ?>
        </form>
    </div>
<?php session_destroy(); ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Exercice2</title>
</head>
<body>
    <div class="container">
    <form action="controller.php" method="Post">
        <h1><i>Générer  la longueur et la largeur  en utilisant la fonction rand() puis calculer et afficher le périmètre,la surface et la diagonale.</i></h1>
        <input type="submit" value="Générer la longueur et la largeur" name="envoi">  
        <?php
            include 'functions.php';
            if(isset($_GET["nn"]) && $_GET["nn"]==0)
                echo "<h1 class='error'>La longueur et/ou la largeur entrée n'est pas valide !</h1>";

            elseif(isset($_GET["largeur"]) && isset($_GET["longueur"])){
                $_GET["longueur"] = (int)($_GET["longueur"]);
                $_GET["largeur"] = (int)($_GET["largeur"]);
                if($_GET["largeur"]==0 || $_GET["longueur"]==0)
                    echo "<h1 class='error'>La longueur et/ou la largeur entrée n'est pas valide !</h1>";
                else
                    rectangle($_GET["longueur"],$_GET["largeur"]);
            }
        ?>
        <input type="submit" value="suivant" name="suivant" class="suivant">
        <input type="submit" value="retour" name="retour" class="retour">
        </form>
    </div>
</body>
</html>


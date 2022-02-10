
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Exercice3</title>
</head>
<body>
    <div class="container">
    <form action="controller.php" method="Post">
        <h1><i>Générer deux nombres puis calculer et afficher:<br>
        Somme - Exponentiel - Différence - Produit - Modulo - Division</i></h1>
        <input type="submit" value="Appuyer pour générer deux nombres" name="envoi">  
        <?php
            include 'functions.php';
            if(isset($_GET["nn"]) && $_GET["nn"]==0)
                echo "<h1 class='error'>Le nombre1 et/ou le nombre2 entré n'est pas valide !</h1>";
            elseif(isset($_GET["nombre2"]) && isset($_GET["nombre1"])){
                $_GET["nombre1"] = (int)($_GET["nombre1"]);
                $_GET["nombre2"] = (int)($_GET["nombre2"]);
                numbers($_GET["nombre1"],$_GET["nombre2"]);
            }
        ?>  
        <section class="buttons">
            <input type="submit" value="Exercice précédent" name="retour" class="retour">
            <input type="submit" value="Exercice suivant" name="suivant" class="suivant">
        </section>    
    </form>
    </div>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Exercice5</title>
</head>
<body>
    <div class="container">
        <h1><i>Générer deux points puis calculer et afficher la distance entre les deux points. Un point est caractérisé par son abscisse et son ordonnée.</i></h1>
        <?php
            include 'functions.php';
            $absPointA = rand(1,100); $absPointB = rand(1,100);
            $ordPointA = rand(1,100); $ordPointB = rand(1,100);
            mes_points($absPointA, $absPointB, $ordPointA, $ordPointB);
        ?>
        <section class="buttons">
            <a href="../Exercice4/index.html.php"><input type="submit" value="Exercice précédent" name="retour" class="retour"></a>
            <a href="../accueil.html.php">Menu</a>
            <a href="../Exercice6/index.html.php"><input type="submit" value="Exercice suivant" name="retour" class="retour"></a>
        </section>
    </div>
</body>
</html>


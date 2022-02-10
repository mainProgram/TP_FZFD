<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Exercice1</title>
</head>
<body>
    <div class="container">
        <form action="controller.php" method="Post">
            <h1>Générer le côté en utilisant la fonction rand() puis calculer et afficher le périmètre,la surface et la diagonale.</h1>
            <input type="submit" value="Générer le côté" name="envoi">
            <?php
                require_once 'functions.php';
                if(isset($_GET["nn"])){

                    if( is_numeric($_GET["nn"]) && $_GET["nn"]!=0){
                        echo '<h1>Le coté est de '.$_GET["nn"].'m</h1>';
                        echo '<h1>Le périmètre est de '.perimetre($_GET["nn"]).'m</h1>';
                        echo '<h1>La surface est de '.surface($_GET["nn"]).'m2</h1>';
                        echo '<h1>La diagonale est de '.diagonale($_GET["nn"]).'</h1>';
                    }else
                        echo "<h1 class = 'error'>Le coté entré n'est pas valide.</h1>";
                }
            ?>
            <input type="submit" value="suivant" name="suivant" class="suivant">
        </form>
    </div>
</body>
</html>

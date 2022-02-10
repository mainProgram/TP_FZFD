<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice6</title>
</head>
<body>
    <div class="container">
        <form action="controller.php" method="post">
            <?php if(isset($_SESSION['equation'])) { echo "<h3>".$_SESSION['equation']."</h3>";} ?>
            <label for="a">Nombre 1</label>
            <?php
                if(isset($_GET["aa"]) && $_GET["aa"]==0)
                    echo '<span class="error">Invalide</span>';
            ?>
            <input type="text" name="a" id="a" value="<?php if(isset($_SESSION['a'])) {echo $_SESSION['a'];} ?>">

            <label for="b">Nombre 2</label>
            <?php
                if(isset($_GET["bb"]) && $_GET["bb"]==0)
                    echo '<span class="error">Invalide</span>';
            ?>
            <input type="text" name="b" id="b" value="<?php if(isset($_SESSION['b'])) {echo $_SESSION['b'];} ?>">

            <label for="c">Nombre 3</label>
            <?php
                if(isset($_GET["cc"]) && $_GET["cc"]==0)
                    echo '<span class="error">Invalide</span>';
            ?>
            <input type="text" name="c" id="c" value="<?php if(isset($_SESSION['c'])) {echo $_SESSION['c'];} ?>">
            
            <label for=""></label>
            <input type="submit" value="Envoyer" name="envoi">
        </form>
    </div>
<?php session_destroy(); ?>

</body>
</html>
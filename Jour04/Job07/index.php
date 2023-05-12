<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2-J3job7</title>
</head>
<body>
<form method="post">
    <label for="largeur">Largeur<br/></label>
    <input type="text" name="largeur" id="largeur"><br/>
    <label for="hauteur">Hauteur<br/></label>
    <input type="text" name="hauteur" id="hauteur"><br/>

    <br/><input type="submit" value="afficher la maison"><br/>
<?php 
    $largeur = $_POST["largeur"];
    $hauteur = $_POST["hauteur"];
    
    for ($i = 1; $i <= $largeur; $i++) {
        echo "^";
    }
    echo "<br/>";
    for ($i = 1; $i <= $largeur / 2; $i++) {
        echo " ";
    }
    echo "| |";
    for ($i = 1; $i <= $largeur / 2; $i++) {
        echo " ";
    }
    echo "<br/>";

    for ($i = 1; $i <= $hauteur - 2; $i++) {
        echo "|";
        for ($j = 1; $j <= $largeur - 2; $j++) {
            echo " ";
        }
        echo "|<br/>";
    }

    for ($i = 1; $i <= $largeur; $i++) {
        echo "_";
    }
    echo "<br/>";

?>
</form>
</body>
</html>
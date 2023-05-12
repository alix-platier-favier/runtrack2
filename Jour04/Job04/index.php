<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2-J3job4</title>
</head>
<body>
<form method="post">
    <label for="Nom">Nom<br/></label>
    <input type="text" name="Nom" id="Nom"><br/>
    <label for="Prénom">Prénom<br/></label>
    <input type="text" name="Prénom" id="Prénom"><br/>

    <br/><input type="submit" value="Envoyer"><br/>
<?php 
    $nom = $_POST["Nom"];
    $prenom = $_POST["Prénom"];
    $i = 0;
        if(isset($_POST["Nom"]) && ($_POST["Prénom"])){
        echo "<table border='2'>";
        echo "<thead><tr><th>" . "Argument" . "</th><th>" . "Valeur" . "</th></tr></thead>";
        echo "<tbody>";
        echo "<tr><td>" . "Prénom" . "</td><td>" . $prenom . "</td></tr>";
        echo "<tr><td>" . "Nom" . "</td><td>" . $nom . "</td></tr>";
        echo "</tbody></table>";
        }
?>
</form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2-J3job3</title>
</head>
<body>
<form method="post">
    <label for="Nom">Nom<br/></label>
    <input type="text" name="Nom" id="Nom"><br/>
    <label for="Prénom">Prénom<br/></label>
    <input type="text" name="Prénom" id="Prénom"><br/>
    <label for="email">Email<br/></label>
    <input type="text" name="Email" id="Email"><br/>

    <br/><input type="submit" value="Envoyer"><br/>
<?php 
    $nom = $_POST["Nom"];
    $prenom = $_POST["Prénom"];
    $email = $_POST["Email"];
    $i = 0;

    foreach($_POST as $key => $value){
        if(isset($_POST[$key])){
            $i++;
        }
    }
    echo "Le nombre d'arguments POST envoyé est : " . $i;
?>
</form>
</body>
</html>
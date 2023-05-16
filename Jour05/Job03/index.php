<?php
session_start();

if (isset($_POST['reset'])) {
    session_unset();
    $_SESSION['prenom'] = array();
}

if (isset($_POST['prenom'])) {
  $prenom = $_POST['prenom'];
  $_SESSION['prenom'][] = $prenom;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2-J5job3</title>
</head>
<body>

<ul>
<form method="post">
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom">
    <input type="submit" value="Envoyer">
    <button type="submit" name="reset" value="Réinitialiser">Reset</button>
</form>

<?php
if(isset($_SESSION["prenom"])){
    foreach($_SESSION["prenom"] as $prenom){
        echo $prenom . "<br/>";
    }
}
?>
</ul>
</body>
</html>
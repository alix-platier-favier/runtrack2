<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2-J3job6</title>
</head>
<body>
<form method="get">
    <label for="Nombre">Nombre<br/></label>
    <input type="number" name="Nombre" id="Nombre"><br/>

    <br/><input type="submit" value="Envoyer"><br/>
<?php 
    $nombre = $_GET["Nombre"];
    $i = 0;
    if($nombre %2 == 0){
        echo "Nombre pair";
    }else{
        echo "Nombre impair";
    }
?>
</form>
</body>
</html>
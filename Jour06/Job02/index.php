<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2-J6job2</title>
</head>
<body>
    <?php

function bonjour($jour){
    if ($jour == true){
        return "Bonjour";
    }else{
        return "Bonsoir";
    }
}
   
$jour = true;
echo bonjour($jour)

?>
</body>
</html>
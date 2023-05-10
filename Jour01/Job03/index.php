<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2-J1-job3</title>
</head>
<body>
    <?php 
        $boolean = true;
        $entier = 3;
        $string = "This is my no-no square";
        $decimal = 6.66;

        echo "<table border= '1'>";
        echo "<thread><tr><th>Type</th><th>Nom</th><th>Valeur</th></tr></thread>";
        echo "<tbody>";
        echo "<tr><td>booléen</td><td>boolean</td><td>" . var_export($boolean, true) . "</td></tr>";
        echo "<tr><td>Entier</td><td>nombreEntier</td><td>" . $entier . "</td></tr>";
        echo "<tr><td>String</td><td>ChaineCaractere</td><td>" . $string . "</td></tr>";
        echo "<tr><td>Nombre à virgule</td><td>Decimal</td><td>" . $decimal . "</td></tr>";
        echo "</tbody></table>";
    ?>
</body>
</html>

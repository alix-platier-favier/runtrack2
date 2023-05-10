<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2-J2job4</title>
</head>
<body>
    <!-- algorithme pour afficher les nombres premiers jusqu'à 1000 -->
    <?php
        // Vérifie si un nombre est premier
		function estPremier($i){
			for ($x= 0; $x < $i; $x++){
				if ($i % $x == 0){
					return false;
				}
			}
			return true;
		}

		// Affiche les nombres premiers jusqu'à 1000
		for ($x= 2; $x <=1000; $x++){
			if (estPremier($x)){
				echo $x . "<br/>";
			}
		}
    ?>
</body>
</html>
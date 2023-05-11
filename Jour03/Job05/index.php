<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack2-J3-job5</title>
</head>
<body>
    <?php
        $str = "On n'est pas le meilleur quand on le croit mais quand on le sait";
        $consonnes = 0;
        $voyelles = 0;
        $i = 0;
        $dic = array(
                "Consonnes" => ["b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "w", "x", "y", "z", "B", "C", "D", "F", "G", "H", "J", "K", "L", "M", "N", "P", "Q", "R", "S", "T", "V", "W", "X", "Y", "Z"],
                "Voyelles" => ["a", "i", "u", "e", "o", "A", "I", "U", "E", "O"],
        );

        while(isset($str[$i])){
            if (in_array($str[$i], $dic["Voyelles"])){
                $voyelles++;
            } elseif(in_array($str[$i], $dic["Consonnes"])){
                $consonnes++;
            }
            $i++;
        }

        echo "<table border='2'>";
        echo "<thead><tr><th>" . "Consonnes" . "</th><th>" . "Voyelles" . "</th></tr></thead>";
        echo "<tbody>";
        echo "<tr><td>" . $consonnes . "</td><td>" . $voyelles . "</td></tr>";
        echo "</tbody></table>";
    ?>
</body>
<?php

$bdd = new PDO("mysql:host=localhost;dbname=jour07", "root", "159753");

$requete = $bdd->prepare("SELECT AVG(capacite) as moyenne_capacite FROM salles");
$requete->execute();
$salles = $requete->fetchAll();

echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>Moyenne des salles</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

foreach ($salles as $salle) {
    echo "<tr>";
    echo "<td>" . $salle['moyenne_capacite'] . "</td>";
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";

?>

<?php

$bdd = new PDO("mysql:host=localhost;dbname=Jour07", "root", "");

$requete = $bdd->prepare("SELECT SUM(capacite) AS total FROM salles");
$requete->execute();
$result = $requete->fetch();
$total = $result['total'];

echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>Capacite_totale</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
echo "<tr>";
echo "<td>" . $total . "</td>";
echo "</tr>";
echo "</tbody>";
echo "</table>";

?>

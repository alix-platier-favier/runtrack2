<?php

$bdd = new PDO("mysql:host=localhost;dbname=Jour07", "root", "");

$requete = $bdd->prepare("SELECT COUNT(*) as count FROM etudiants");
$requete->execute();
$users = $requete->fetch();
$count = $users["count"];

echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>Nombre d'étudiants</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
echo "<tr>";
echo "<td>" . $count . "</td>";
echo "</tr>";
echo '</tbody>';
echo '</table>';

?>

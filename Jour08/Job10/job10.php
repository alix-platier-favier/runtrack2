<?php

$bdd = new PDO("mysql:host=localhost;dbname=jour07", "root", "159753");

$requete = $bdd->prepare("SELECT * FROM `salles` ORDER BY `salles`.`capacite` ASC");
$requete->execute();
$salles = $requete->fetchAll();

echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>Nom</th>";
echo "<th>Id_etage</th>";
echo "<th>Capacité</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

foreach ($salles as $salle) {
    echo "<tr>";
    echo "<td>" . $salle['nom'] . "</td>";
    echo "<td>" . $salle['id_etage'] . "</td>";
    echo "<td>" . $salle['capacite'] . "</td>";
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";

?>

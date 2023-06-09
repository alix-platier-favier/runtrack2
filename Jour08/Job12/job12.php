<?php

$bdd = new PDO("mysql:host=localhost;dbname=jour07", "root", "");

$requete = $bdd->prepare("SELECT prenom, nom, naissance
FROM etudiants
WHERE naissance BETWEEN '1998-01-01' AND '2018-01-01'");
$requete->execute();
$etudiants = $requete->fetchAll();

echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>Prénom</th>";
echo "<th>Nom</th>";
echo "<th>Naissance</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

foreach ($etudiants as $etudiant) {
    echo "<tr>";
    echo "<td>" . $etudiant['prenom'] . "</td>";
    echo "<td>" . $etudiant['nom'] . "</td>";
    echo "<td>" . $etudiant['naissance'] . "</td>";
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";

?>

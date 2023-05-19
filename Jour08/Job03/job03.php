<?php

$bdd = new PDO("mysql:host=localhost;dbname=Jour07", "root", "");

$requete = $bdd->prepare("SELECT prenom, nom, naissance FROM etudiants WHERE sexe = 'Femme'");
$requete->execute();
$users = $requete->fetchAll();

echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>Prénom</th>";
echo "<th>Nom</th>";
echo "<th>Naissance</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

foreach ($users as $user) {
    echo '<tr>';
    echo '<td>' . $user['prenom'] . '</td>';
    echo '<td>' . $user['nom'] . '</td>';
    echo '<td>' . $user['naissance'] . '</td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';

?>

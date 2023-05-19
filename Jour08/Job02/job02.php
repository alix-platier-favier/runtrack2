
<?php

$bdd = new PDO("mysql:host=localhost;dbname=Jour07", "root", "");

$requete = $bdd -> prepare("SELECT nom, capacite FROM salles");
$requete -> execute();
$users = $requete -> fetchAll();

echo "<table border = '1'>";
echo "<thead>";
echo "<tr>";
echo "<th>Nom</th>";
echo "<th>Capacité</th>";
echo "</thread>";
echo "<tbody>";

foreach ($users as $user) {
    echo '<tr>';
    echo '<td>' . $user['nom'] . '</td>';
    echo '<td>' . $user['capacite'] . '</td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';

?>
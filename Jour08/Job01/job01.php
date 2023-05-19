
<?php

$bdd = new PDO("mysql:host=localhost;dbname=Jour07", "root", "");

$requete = $bdd -> prepare("SELECT * FROM etudiants");
$requete -> execute();
$users = $requete -> fetchAll();

echo "<table border = 1>";
echo "<thead>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Prenom</th>";
echo "<th>Nom</th>";
echo "<th>Naissance</th>";
echo "<th>Sexe</th>";
echo "<th>Email</th>";

foreach ($users as $user) {
    echo '<tr>';
    echo '<td>' . $user['id'] . '</td>';
    echo '<td>' . $user['prenom'] . '</td>';
    echo '<td>' . $user['nom'] . '</td>';
    echo '<td>' . $user['naissance'] . '</td>';
    echo '<td>' . $user['sexe'] . '</td>';
    echo '<td>' . $user['email'] . '</td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';

?>
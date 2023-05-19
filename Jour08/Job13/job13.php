
<?php

$bdd = new PDO("mysql:host=localhost;dbname=jour07","root","159753");

$requete = $bdd -> prepare("SELECT salles.nom AS nom_salles, etage.nom AS nom_etage
FROM salles
JOIN etage ON salles.id_etage = etage.id");

$requete -> execute();
$salles_etages = $requete -> fetchAll();

echo "<table border = 1>";
echo "<thread>";
echo "<tr>";
echo "<th>Nom de la salle</th>";
echo "<th>Nom de l'étage</th>";
echo "</tr>";
echo "</thread>";
echo "<tbody>";

foreach ($salles_etages as $se){
    echo "<tr>";
    echo "<td>" . $se["nom_salle"] . "</td>";
    echo "<td>" . $se["nom_etage"] . "</td>";
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";
?>

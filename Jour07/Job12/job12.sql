-- Écrivez dans le fichier “job12.sql” une requête permettant de sélectionner l’ensemble
-- des salles en les triant par capacité décroissante.

SELECT capacite
FROM salles
ORDER BY capacite DESC;
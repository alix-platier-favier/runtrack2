-- Écrivez dans le fichier “job07.sql” une requête permettant de sélectionner l’ensemble
-- des informations des étudiants qui ont plus de 18 ans.

SELECT *
FROM etudiants
WHERE naissance > '2005-01-01';
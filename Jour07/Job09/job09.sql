-- Écrivez dans le fichier “job09.sql” une requête permettant de sélectionner l’ensemble
-- des informations des étudiants qui ont moins de 18 ans.


SELECT * 
FROM etudiants
WHERE naissance < '2005-01-01';
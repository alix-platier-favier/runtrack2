-- Écrivez dans le fichier “job10.sql” une requête permettant de calculer la superficie de
-- l’ensemble des étages.


SELECT SUM(superficie) AS total
FROM etage;

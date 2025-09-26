-- Ecrivez dans le fichier “job09.sql” une requête permettant de sélectionner l’ensemble
-- des informations des étudiants qui ont moins de 18 ans.

SELECT * FROM etudiants
WHERE TIMESTAMPDIFF(YEAR, naissance, CURDATE()) < 18;

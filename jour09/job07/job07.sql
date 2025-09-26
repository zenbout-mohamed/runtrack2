-- Ecrivez dans le fichier “job07.sql” une requête permettant de sélectionner l’ensemble
-- des informations des étudiants qui ont plus de 18 ans.

SELECT * FROM etudiants
WHERE TIMESTAMPDIFF(YEAR, naissance, CURDATE()) > 18;
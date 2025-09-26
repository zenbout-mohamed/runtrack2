-- Ecrivez dans le fichier “job06.sql” une requête permettant de sélectionner l’ensemble
-- des informations des étudiants dont prenom commence par un “T”.

SELECT * FROM etudiants
WHERE TIMESTAMPDIFF(YEAR, naissance, CURDATE()) > 18;

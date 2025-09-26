-- Ecrivez dans le fichier “job16.sql” une requête permettant de récupérer le nom de
-- l'étage ayant la salle avec la plus grande capacité (et afficher aussi le nom de cette salle
-- ainsi que sa capacité).
-- Dans ce résultat, la colonne “nom” de la salle doit être renommée en “Biggest Room”

SELECT e.nom AS etage,
       s.nom AS `Biggest Room`,
       s.capacite
FROM salles s
JOIN etage e ON s.id_etage = e.id
ORDER BY s.capacite DESC
LIMIT 1;

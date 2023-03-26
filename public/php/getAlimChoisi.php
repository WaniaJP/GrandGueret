<?php
echo json_encode(getAlimentsPlusChoisis());

function getAlimentsPlusChoisis(){
    require('connectBD.php'); //$pdo est défini dans ce fichier
    $sql = "SELECT a.id, a.nom_fr, a.nom_scientifique, a.groupe_id, a.sous_groupe_id, a.sous_sous_groupe_id,COUNT(s.id) as 'nombre', IFNULL(((i.glucides_g100g+i.sucres_g100g+i.fructose_g100g+i.galactose_g100g+i.glucose_g100g)/100), 0) as 'sucre', IFNULL(((i.ag_oleique_g100g + i.ag_satures_g100g + i.ag_laurique_g100g + i.ag_myristique_g100g + i.ag_palmitique_g100g)/100), 0) AS 'gras' 
    FROM aliment a, sondage s, information_nutritionnelle i 
    WHERE (a.id = s.aliment1_id OR a.id = s.aliment2_id OR a.id = s.aliment3_id OR a.id = s.aliment4_id OR a.id = s.aliment5_id OR a.id = s.aliment6_id OR a.id = s.aliment7_id OR a.id = s.aliment8_id OR a.id = s.aliment9_id OR a.id = s.aliment10_id) AND a.id = i.aliment_id 
    GROUP BY 1 
    ORDER BY 7, 8, 9 DESC;";

    try {
        $commande = $pdo->prepare($sql);
        $bool = $commande->execute();
        if ($bool) {
            $resultat = $commande->fetchAll(PDO::FETCH_ASSOC); //tableau d'enregistrements
            if(count($resultat) > 0){
            return $resultat;
            }
            else return false;
        }
    }
    catch (PDOException $e) {
        echo utf8_encode("Echec de select : " . $e->getMessage() . "\n");
        die(); // On arrête tout.
    }
}
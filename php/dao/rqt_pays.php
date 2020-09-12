<?php
require_once 'db.php';

/**
 * Classe d'accès aux données Pays des cartes postales
 */
class RqtPays
{
    public function fetchCountry()
    {
        $rqt = "SELECT DISTINCT pays FROM cartes_postales.cartes ORDER BY pays ASC";

        $db = new db();
        $resultat = $db->executeQuery($rqt);

        return $resultat;
    }
}

?>
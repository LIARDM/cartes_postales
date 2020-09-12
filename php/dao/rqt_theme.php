<?php
require_once 'db.php';

/**
 * Classe d'accès aux données thématique des cartes postales.
 */
class RqtTheme
{
    /**
     * Récupère la liste des thèmes existants.
     */
    public function fetchTheme()
    {
        $rqt = "SELECT DISTINCT theme FROM cartes_postales.cartes ORDER BY theme ASC";

        $db = new db();
        $resultat = $db->executeQuery($rqt);

        return $resultat;
    }
}

?>
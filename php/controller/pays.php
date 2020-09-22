<?php 
require_once './php/model/rqt_pays.php';

/**
 * Classe "objet-métier" Pays.
 */
class Pays
{
   private static $countryList; 

   public function __construct()
   {
       self::setCountryList();
   }

   private function setCountryList()
   {
        $rqt_pays = new RqtPays;
        self::$countryList = $rqt_pays->fetchCountry();
   }

   public function getCountryList()
   {
       return self::$countryList;
   }
}
?>
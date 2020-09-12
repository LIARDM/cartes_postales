<?php 
require_once './php/dao/rqt_expediteur.php';

/**
 * Classe "objet-métier" Expediteur.
 */
class Expediteur
{
   private static $senderList; 

   public function __construct()
   {
       self::setSenderList();
   }

   private function setSenderList()
   {
        $rqt_sender = new RqtExpediteur;
        self::$senderList = $rqt_sender->fetchSender();
   }

   public function getSenderList()
   {
       return self::$senderList;
   }
}


?>
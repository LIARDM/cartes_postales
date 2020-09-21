<?php 
require_once './php/model/rqt_theme.php';

/**
 * Classe "objet-métier" thème.
 */
class Theme
{
   private static $themeList; 

   public function __construct()
   {
       self::setThemeList();
   }

   private function setThemeList()
   {
        $rqt_theme = new RqtTheme;
        self::$themeList = $rqt_theme->fetchTheme();
   }

   public function getThemeList()
   {
       return self::$themeList;
   }
}


?>
<?php
     class ModeleGenerique{

         protected static $bdd;
         public function __construct(){

         }
         public static function init(){
                 $b = 'mysql:host=database-etudiants.iut.univ-paris8.fr;dbname=dutinfopw201642';
                 $user = 'dutinfopw201642';
                 $password = 'pubepete';
                 self::$bdd = new PDO($b, $user, $password);
         }
    }
 ?>

<?php
    require_once('./ClassesGeneriques/modele_generique.php');
    class Modele_Frigo extends ModeleGenerique{
        public function __construct(){
            ModeleGenerique::init();
        }


        public function getLaitiers(){
            $result = self::$bdd -> prepare('select * from Ingredient where famille="Produits Laitiers"');
            $res = $result -> execute();
            return $result->fetchAll();
        }




    }
?>

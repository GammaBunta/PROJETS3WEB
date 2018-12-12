<?php
    require_once('./ClassesGeneriques/modele_generique.php');
    class Modele_Recettes extends ModeleGenerique{

        public function __construct(){
            ModeleGenerique::init();
        }

        public function rechercheSpeciale(){
            echo 'rechercheSpe';

            $result = self::$bdd -> prepare('select * from Recette ');
            $res = $result -> execute();
            return $result->fetchAll();
        }
    }
?>

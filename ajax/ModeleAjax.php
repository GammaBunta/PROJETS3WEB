<?php
    require_once('../ClassesGeneriques/modele_generique.php');
    class Modele_Ajax extends ModeleGenerique{
        public function __construct(){
            ModeleGenerique::init();
        }

        public function getIngredients($famille){
            $result = self::$bdd -> prepare('select * from Ingredient where famille=:famille');
            $result -> bindParam(':famille',$famille);
            $res = $result -> execute();
            return $result->fetchAll();

        }
    }
?>

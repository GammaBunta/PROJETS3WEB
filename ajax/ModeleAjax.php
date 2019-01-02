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

        public function ingredientExiste($nomIngr){
            $result = self::$bdd -> prepare('select * from Ingredient where UPPER(nomingr)=:ingr');
            $result -> bindParam(':ingr',strtoupper($nomIngr));
            $res = $result-> execute();
            return isset($res);
        }
    }
?>

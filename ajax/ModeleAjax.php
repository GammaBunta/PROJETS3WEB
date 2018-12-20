<?php
    require_once('../ClassesGeneriques/modele_generique.php');
    class Modele_Ajax extends ModeleGenerique{
        public function __construct(){
            ModeleGenerique::init();
        }

        public function getIngredients($famille, $id){
            $result = self::$bdd -> prepare('select * from Utilisateur natural join possede natural join Ingredient where famille=:famille and idUser =:id');
            $result -> bindParam(':famille',$famille);
            $result -> bindParam(':famille',$id);
            $res = $result -> execute();
            return $result->fetchAll();

        }
    }
?>

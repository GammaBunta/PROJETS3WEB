<?php
    require_once('../ClassesGeneriques/modele_generique.php');
    class Modele_Ajax extends ModeleGenerique{
        public function __construct(){
            ModeleGenerique::init();
        }

        public function getIngredients($famille, $id){
            $result = self::$bdd -> prepare('select * from Utilisateur natural join possede natural join Ingredient where famille=:famille and idUser =:id');
            $result -> bindParam(':famille',$famille);
            $result -> bindParam(':id',$id);
            $res = $result -> execute();
            return $result->fetchAll();

        }

        public function ingredientExiste($nomIngr){
            $result = self::$bdd -> prepare('select * from Ingredient where nomingr=:nom');
            $result -> bindParam(':nom', $nomIngr);
            $res = $result -> execute();
            return $result->fetch();
        }

        public function verifVote($idRec){
            $result = self::$bdd -> prepare('SELECT * from aVote where idrec=:idrec and idUser=:idUser');
            $result -> bindParam(':idrec',$idRec);
            $result -> bindParam(':idUser',$_SESSION['id']);
            $res = $result -> execute();
            return $result -> fetch();
        }
    }
?>

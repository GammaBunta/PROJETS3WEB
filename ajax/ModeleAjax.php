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
            $result -> execute();
            return $result->fetch();
        }

        public function userAVote($idRec,$idUser){
            $result = self::$bdd -> prepare('SELECT * from aVote where idrec=:idrec and idUser=:idUser');
            $result -> bindParam(':idrec',$idRec);
            $result -> bindParam(':idUser',$idUser);
            $result -> execute();
            return $result->fetch();
        }

        public function votePlus($idrec,$idUser){

            $resultNote = self::$bdd -> prepare('SELECT avisPositif from Recette where idrec=:idrec');
            $resultNote -> bindParam(':idrec',$idrec);
            $resultNote -> execute();
            $res = $resultNote -> fetch();
            $notetmp = $res['avisPositif'];

            $note= $notetmp+1;
            $result = self::$bdd -> prepare('UPDATE Recette SET avisPositif=:note where idrec=:idrec');
            $result -> bindParam(':idrec',$idrec);
            $result -> bindParam(':note',$note);
            $result -> execute();

            $result = self::$bdd -> prepare('INSERT INTO aVote (`idrec`,`idUser`) VALUES (:idrec,:iduser)');
            $result -> bindParam(':idrec',$idrec);
            $result -> bindParam(':iduser',$idUser);
            $result -> execute();



        }

        public function voteMoins($idrec, $idUser){
            $resultNote = self::$bdd -> prepare('SELECT avisNegatif from Recette where idrec=:idrec');
            $resultNote -> bindParam(':idrec',$idrec);
            $resultNote -> execute();
            $res = $resultNote -> fetch();
            $notetmp = $res['avisNegatif'];

            $note= $notetmp+1;
            $result = self::$bdd -> prepare('UPDATE Recette SET avisNegatif=:note where idrec=:idrec');
            $result -> bindParam(':idrec',$idrec);
            $result -> bindParam(':note',$note);
            $result -> execute();


            $result = self::$bdd -> prepare('INSERT INTO aVote (`idrec`,`idUser`) VALUES (:idrec,:iduser)');
            $result -> bindParam(':idrec',$idrec);
            $result -> bindParam(':iduser',$idUser);
            $result -> execute();

        }
    }
?>

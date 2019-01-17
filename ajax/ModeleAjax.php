<?php
require_once('../ClassesGeneriques/modele_generique.php');
class Modele_Ajax extends ModeleGenerique{
    public function __construct(){
        ModeleGenerique::init();
    }

    public function getinfoIngr($id){
        $res = self::$bdd -> prepare('SELECT * from Ingredient where idingr=:id');
        $res -> bindParam(':id',$id);
        $res -> execute();
        return $res -> fetch();
    }

    public function getIngredients($famille, $id){
        $result = self::$bdd -> prepare('select * from possede natural join Ingredient where famille=:famille and idUser =:id');
        $result -> bindParam(':famille',$famille);
        $result -> bindParam(':id',$id);
        $res = $result -> execute();
        return $result->fetchAll();

    }

    public function getToutIngredients($famille){
        $result = self::$bdd -> prepare('select * from Ingredient where famille=:famille');
        $result -> bindParam(':famille',$famille);
        $res = $result -> execute();
        return $result->fetchAll();
    }

    public function ingredientExiste($nomIngr){
        $result = self::$bdd -> prepare('select * from Ingredient where nomingr=:nom');
        $result -> bindParam(':nom', $nomIngr);
        $result -> execute();
        return $result->fetch();
    }


    public function ajoutIngredients($idUser, $quantite, $idIngr,$date){
        $aDeja = self::$bdd -> prepare('SELECT * FROM possede where idingr=:idingr and idUser=:idUser');
        $aDeja -> bindParam(':idingr',$idIngr);
        $aDeja -> bindParam('idUser',$idUser);
        $aDeja -> execute();
        $res = $aDeja -> fetch();
        if($res){
            $quanttmp = $res['quantite'];
            $newquant = $quanttmp + $quantite;
            $result = self::$bdd -> prepare('UPDATE possede SET quantite=:newquant where idUser=:idUser and idingr=:idingr');
            $result -> bindParam(':idingr',$idIngr);
            $result-> bindParam('idUser',$idUser);
            $result -> bindParam('newquant',$newquant);
            $result -> execute();
        }else{
            $result = self::$bdd -> prepare('INSERT INTO possede (`idingr`, `idUser`, `quantite`, `datePeremption`) VALUES (:idingr,:idUser,:quantite,:date)');
            $result -> bindParam(':idingr',$idIngr);
            $result-> bindParam('idUser',$idUser);
            $result -> bindParam('quantite',intval($quantite));
            $result-> bindParam('date',$date);
            $result -> execute();
        }


        return $this->getinfoIngr($idIngr);

    }

    public function retirerIngredients($idUser,$idIngr){
        $ingr = self::$bdd -> prepare('SELECT * FROM possede where idingr=:idingr and idUser=:idUser');
        $ingr -> bindParam(':idingr',$idIngr);
        $ingr -> bindParam('idUser',$idUser);
        $ingr -> execute();
        $res = $ingr -> fetch();
        $quanttmp = $res['quantite'];
        if($quanttmp==1){
            $result = self::$bdd -> prepare('DELETE from possede where idUser=:idUser and idingr=:idingr');
            $result -> bindParam(':idingr',$idIngr);
            $result-> bindParam('idUser',$idUser);
            $result -> execute();
        }else{
            $newquant = $quanttmp -1 ;
            $result = self::$bdd -> prepare('UPDATE possede SET quantite=:newquant where idUser=:idUser and idingr=:idingr');
            $result -> bindParam(':idingr',$idIngr);
            $result-> bindParam('idUser',$idUser);
            $result -> bindParam('newquant',$newquant);
            $result -> execute();
        }
        return $this->getinfoIngr($idIngr);
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

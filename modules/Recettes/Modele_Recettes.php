<?php
require_once('./ClassesGeneriques/modele_generique.php');
class Modele_Recettes extends ModeleGenerique{

    public function __construct(){
        ModeleGenerique::init();
    }
    public function toutesRecette(){
        $req = self::$bdd -> prepare('SELECT * FROM Recette');
        $req -> execute();
        return $req-> fetchAll();
    }

    public function rechercheNormale(){
        //JOUER SUR LES ISSETS
        $compt=0;
        $sel = 'select * from Recette';
        if($_POST['categorie']!="Choisir..."){
            $categorie=$_POST['categorie'];
            $sel .=' where categorie=:cat';
            $compt++;
        }
        if($_POST['niveau']!="Choisir..."){
            $niveau=$_POST['niveau'];
            if($compt==0){
                $sel .=' where niveau=:niv';
                $compt++;
            }else {
                $sel .=' and niveau=:niv';
            }
        }
        if(isset($_POST['vegetarien'])){
            if($compt==0){
                $sel .= ' where vegetarien=1';
                $compt++;
            }else{
                $sel .=' and vegetarien=1';
            }
        }

        if(isset($_POST['gluten'])){
            if($compt==0){
                $sel .= ' where gluteenFree=1';
            }else{
                $sel .= ' and gluteenFree=1';
            }
        }
        $req = self::$bdd -> prepare($sel);
        if($_POST['niveau']!="Choisir..."){
            $req -> bindParam(':niv',$niveau);
        }
        if($_POST['categorie']!="Choisir..."){
            $req -> bindParam(':cat', $categorie);
        }
        $req->execute();
        return $req->fetchAll();
    }

    public function rechercheSpeciale($array){
        if($array[0]==""){
            $sel = 'select * from Recette';
        }else{
            $sel = 'select * from Recette natural join utiliser where';
            for($i=0 ; $i < count($array); $i++){
                $select = 'SELECT idingr FROM Ingredient WHERE nomingr ="'.utf8_decode($array[$i]).'"';
                $id=self::$bdd -> query($select);
                $idIngr=$id->fetch();

                if($i == count($array)-1){
                    $sel .=' idingr='.$idIngr[0];
                }else{
                    $sel .=' idingr='.$idIngr[0].' or ';
                }
            }
        }


        $result = self::$bdd -> prepare($sel);
        $res = $result -> execute();
        return $result->fetchAll();


    }


    public function infoRecette($id){
        $req = self::$bdd -> prepare('SELECT * FROM Recette where idrec=:id');
        $req->bindParam(':id', $id);
        $req -> execute();
        return $req -> fetch();

    }

    public function infoIngrRecette($id){
        $req = self::$bdd -> prepare('select * from utiliser natural join Ingredient where idrec=:id');
        $req->bindParam(':id',$id);
        $req -> execute();
        return $req->fetchAll();

    }
}
?>

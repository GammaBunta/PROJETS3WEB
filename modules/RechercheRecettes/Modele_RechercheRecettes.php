<?php
require_once('./ClassesGeneriques/modele_generique.php');
class Modele_RechercheRecettes extends ModeleGenerique{

    public function __construct(){
        ModeleGenerique::init();
    }
    public function toutesRecette(){
        $req = self::$bdd -> prepare('SELECT * FROM Recette');
        $req -> execute();
        return $req-> fetchAll();
    }

    public function rechercheParNom(){
        $_POST['nomRec'] = "%".$_POST['nomRec']."%";
        $nomRec = $_POST['nomRec'];
        $req = self::$bdd -> prepare('SELECT * FROM Recette where titre like :nomRec ');
        $req->bindParam(':nomRec',$nomRec);
        $req->execute();
        return $req->fetchAll();
    }

    public function rechercheNormale(){
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
            $result = self::$bdd -> prepare($sel);
            $res = $result -> execute();
            return $result->fetchAll();

        }else{
            $sel = 'select distinct Recette.idrec from Recette natural join utiliser where';
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

            $result = self::$bdd -> prepare($sel);
            $result -> execute();
            $res = $result->fetchAll();

            if(count($res)!=0){
                $id = [];

                foreach($res as $item){
                    array_push($id, $item['idrec']);
                }


                $fin = 'select  * from Recette where';

                for($i=0 ; $i < count($id); $i++){
                    if($i != count($id)-1){
                        $fin .= ' idrec='.$id[$i].' or ';
                    }else{
                        $fin .=' idrec='.$id[$i];
                    }

                }

                var_dump($fin);

                $oui = self::$bdd -> query($fin);
                $oui -> execute();
                return $oui -> fetchAll();
            }






        }







    }


}
?>

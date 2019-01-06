<?php
    require_once('./ClassesGeneriques/modele_generique.php');
    class Modele_ajoutRecette extends ModeleGenerique{
        public function __construct(){
            ModeleGenerique::init();
        }

        public function ajoutUtiliser($idRecette, $quantite,$ingredient){
            $result = self::$bdd -> prepare('SELECT idingr from Ingredient where nomingr=:nom');
            $result -> bindParam(':nom', $ingredient);
            $res = $result -> execute();
            $idingr=$result->fetch()[0];
            $req = self::$bdd -> prepare('INSERT INTO `utiliser` (`idrec`, `idingr`, `quantite`) VALUES (:idrec,:idingr,:quantite)');
            $res = $req -> execute(array(':idrec'=>$idRecette,':idingr'=>$idingr,'quantite'=>$quantite));
            
        }

        public function publier(){

            $nomRecette = $_POST['nomRecette'];
            $categorie = $_POST['categorie'];
            $niveau = $_POST['niveau'];
            $vegetarien = $_POST['optionsVege'];

            if($vegetarien == 'option1'){
                $vegetarien=1;
            }else{
                $vegetarien=0;
            }

            $gluten = $_POST['optionsGluten'];
            if($gluten=='option1'){
                $gluten=1;
            }else{
                $gluten=0;
            }

            $nbPers = $_POST['nbPers'];
            $tpsPrepa =$_POST['tpsPrepa'];
            $tpsRepos = $_POST['tpsRepos'];
            $tpsCuisson = $_POST['tpsCuisson'];
            $text = $_POST['texteRecette'];
            $avis = NULL;
            $cout = NULL;
            $img = NULL;
            $nbavis=NULL;
            $idUser = $_SESSION['id'];

            $req = self::$bdd -> prepare('INSERT INTO Recette (idrec,idUser,titre, nbpers, categorie, vegetarien, gluteenFree, avisInternaut, niveau, cout, tpsprepa, tpscuisson, tpsrepose, textrec, img, nombreAvis) values (DEFAULT,:idUser,:titre,:nbpers,:categorie,:vegetarien,:gluteen,:avisInternaut,:niveau,:cout,:tpsprepa,:tpscuisson,:tpsrepos,:textrec,:img,:nombreAvis)');
            $res = $req -> execute(array(':idUser'=>$idUser,':titre'=> $nomRecette,':nbpers'=>$nbPers,':categorie'=>$categorie,':vegetarien'=>$vegetarien,':gluteen'=>$gluten,':avisInternaut'=> $avis,':niveau'=>$niveau,':cout'=>$cout,':tpsprepa'=>$tpsPrepa,':tpscuisson'=>$tpsCuisson,':tpsrepos'=>$tpsRepos,
            ':textrec'=>$text,':img'=>$img,':nombreAvis'=>$nbavis));

            $res = $req -> execute();

            if($res===FALSE){
                echo 'non insert Recette';
            }else{
                echo 'ok insert recette';
            }

            $ingredients=explode(',',$_POST['listeIngredients']);
            $quantites = explode(',',$_POST['listeQuantites']);
            var_dump($ingredients);
            var_dump($quantites);
            $idRecette = self::$bdd -> lastInsertId();
            $i =0;
            foreach($ingredients as $item){
                $this->ajoutUtiliser($idRecette,$quantites[$i],$item);
                $i++;
            }

        }

    }
?>

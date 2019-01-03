<?php
    require_once('./ClassesGeneriques/modele_generique.php');
    class Modele_ajoutRecette extends ModeleGenerique{
        public function __construct(){
            ModeleGenerique::init();
        }

        public function publier(){
            $nomRecette = htmlspecialchars($_POST['nomRecette']);
            $categorie = htmlspecialchars($_POST['categorie']);
            $niveau = htmlspecialchars($_POST['niveau']);
            $vegetarien = htmlspecialchars($_POST['optionsVege']);
            if($vegetarien == 'option1'){
                $vegetarien=0;
            }else{
                $vegetarien=1;
            }
            $gluten = htmlspecialchars($_POST['optionsGluten']);
            if($gluten=='option1'){
                $gluten=0;
            }else{
                $gluten=1;
            }
            $nbPers = htmlspecialchars($_POST['nbPers']);
            $tpsPrepa = htmlspecialchars($_POST['tpsPrepa']);
            $tpsRepos = htmlspecialchars($_POST['tpsRepos']);
            $tpsCuisson = htmlspecialchars($_POST['tpsCuisson']);
            $ingredients=explode(',',$_POST['listeIngredients']);
            $quantites = explode(',',$_POST['listeQuantites']);
            $text = htmlspecialchars($_POST['texteRecette']);

            $avis = NULL;
            $cout = NULL;
            $img = NULL;
            $nbavis=NULL;
            $req = self::$bdd -> prepare('INSERT INTO Recette (idrec,idUser,titre, nbpers, categorie, vegetarien, gluteenFree, avisInternaut, niveau, cout, tpsprepa, tpscuisson, tpsrepose, textrec, img, nombreAvis)
            values (DEFAULT,:idUser,:titre,:nbpers,:categorie,:vegetarien,:gluteen,:avisInternaut,:niveau,:cout,:tpsprepa,:tpscuisson,:tpsrepos,:textrec,:img,:nombreAvis)');
            $req -> bindParam(':idUser',$_SESSION['id']);
            $req -> bindParam(':titre', $nomRecette);
            $req -> bindParam(':nbpers',$nbPers);
            $req -> bindParam(':categorie', $categorie);
            $req -> bindParam(':vegetarien',$vegetarien);
            $req -> bindParam(':gluteen',$gluten);
            $req -> bindParam(':avisInternaut', $avis);
            $req -> bindParam(':niveau',$niveau);
            $req -> bindParam(':cout',$cout);
            $req -> bindParam(':tpsprepa',$tpsPrepa);
            $req -> bindParam(':tpscuisson', $tpsCuisson);
            $req-> bindParam(':tpsrepos',$tpsRepos);
            $req -> bindParam(':textrec',$text);
            $req -> bindParam(':img',$img);
            $req -> bindParam(':nombreAvis',$nbavis);

            if(!$req){
                echo "\nPDO::errorInfo():\n";
                print_r(self::$bdd->errorInfo());
            }








        }





    }
?>

<?php
    require_once('./ClassesGeneriques/modele_generique.php');
    class Modele_ajoutRecette extends ModeleGenerique{
        public function __construct(){
            ModeleGenerique::init();
        }

        public function publier(){
        //    var_dump($_POST);


            $nomRecette = htmlspecialchars($_POST['nomRecette']);
            echo '<br/>nom '.$nomRecette;

            $categorie = $_POST['categorie'];
            echo '<br/> cate : '.$categorie;

            $niveau = $_POST['niveau'];
            echo '<br/> niv : '.$niveau;

            $vegetarien = $_POST['optionsVege'];
            echo '<br/> vege : '.$vegetarien;

            if($vegetarien == 'option1'){
                $vegetarien=0;
            }else{
                $vegetarien=1;
            }

            $gluten = $_POST['optionsGluten'];
            echo '<br /> gluten : '.$gluten;

            if($gluten=='option1'){
                $gluten=0;
            }else{
                $gluten=1;
            }


            $nbPers = $_POST['nbPers'];
            echo '<br/>nbPers : '.$nbPers;

            $tpsPrepa =$_POST['tpsPrepa'];
            echo '<br/>temps prepa : '.$tpsPrepa;

            $tpsRepos = $_POST['tpsRepos'];
            echo '<br/>nbRepos : '.$tpsRepos;

            $tpsCuisson = $_POST['tpsCuisson'];
            echo '<br/>tpsCuisson : '.$tpsCuisson;

            $ingredients=explode(',',$_POST['listeIngredients']);

            $quantites = explode(',',$_POST['listeQuantites']);

            $text = $_POST['texteRecette'];
            echo '<br/>texte : '.$text;

            $avis = NULL;
            $cout = NULL;
            $img = NULL;
            $nbavis=NULL;

            $idUser = $_SESSION['id'];
            echo '<br/>id : '.$idUser;
/*
            $req = self::$bdd -> prepare('INSERT INTO Recette (idrec,idUser,titre, nbpers, categorie, vegetarien, gluteenFree, avisInternaut, niveau, cout, tpsprepa, tpscuisson, tpsrepose, textrec, img, nombreAvis) values (DEFAULT,:idUser,:titre,:nbpers,:categorie,:vegetarien,:gluteen,:avisInternaut,:niveau,:cout,:tpsprepa,:tpscuisson,:tpsrepos,:textrec,:img,:nombreAvis)');
            $res = $req -> execute(array(':idUser'=>$idUser,':titre'=> $nomRecette,':nbpers'=>$nbPers,':categorie'=>$categorie,':vegetarien'=>$vegetarien,':gluteen'=>$gluten,':avisInternaut'=> $avis,':niveau'=>$niveau,':cout'=>$cout,':tpsprepa'=>$tpsPrepa,':tpscuisson'=>$tpsCuisson,':tpsrepos'=>$tpsRepos,
            ':textrec'=>$text,':img'=>$img,':nombreAvis'=>$nbavis));

            $req -> bindParam(':idUser',$idUser);
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
            $req -> bindParam(':tpsrepos',$tpsRepos);
            $req -> bindParam(':textrec',$text);
            $req -> bindParam(':img',$img);
            $req -> bindParam(':nombreAvis',$nbavis);

            $res = $req -> execute();

            if($res===FALSE){
                echo 'false';
            }else{
                echo($res->fetchAll(PDO::FETCH_ASSOC));
                $res->closeCursor();
                echo 'ok';
            }*/
        }
    }
?>

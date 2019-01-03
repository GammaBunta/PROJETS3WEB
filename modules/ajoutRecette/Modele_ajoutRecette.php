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
            $gluten = htmlspecialchars($_POST['optionsGluten']);
            $nbPers = htmlspecialchars($_POST['nbPers']);
            $tpsPrepa = htmlspecialchars($_POST['tpsPrepa']);
            $tpsRepos = htmlspecialchars($_POST['tpsRepos']);
            $tpsCuisson = htmlspecialchars($_POST['tpsCuisson']);
            $ingredients=explode(',',$_POST['listeIngredients']);
            $quantites = explode(',',$_POST['listeQuantites']);
            $text = htmlspecialchars($_POST['texteRecette']);


            
            //(`idrec`, `idingr`, `quantite`,`idUser`)








        }





    }
?>

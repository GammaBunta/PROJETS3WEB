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
            

        }





    }
?>

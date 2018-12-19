<?php
    require_once('./ClassesGeneriques/module_generique.php');
    include('Cont_Accueil.php');

    class Accueil extends ModuleGenerique{

        public function __construct(){
        	$this->controleur = new Controleur_Accueil();
        }

        public function index(){
            $this->controleur->init();
        }


    }

 ?>

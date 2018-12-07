<?php
    require_once('./ClassesGeneriques/module_generique.php');
    include('Cont_CreerCompte.php');

    class Connexion extends ModuleGenerique{

        public function __construct(){
        	$this->controleur = new Controleur_CreerCompte();
        }

        public function index(){
            $this->controleur->init();
        }


    }

 ?>
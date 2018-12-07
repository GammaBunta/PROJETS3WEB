<?php
    require_once('./ClassesGeneriques/module_generique.php');
    include('Cont_Connexion.php');

    class Connexion extends ModuleGenerique{

        public function __construct(){
        	$this->controleur = new Controleur_Connexion();
        }

        public function index(){
            $this->controleur->init();
        }


    }

 ?>
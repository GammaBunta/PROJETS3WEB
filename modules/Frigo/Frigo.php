<?php
    require_once('./ClassesGeneriques/module_generique.php');
    include('Cont_Frigo.php');

    class Frigo extends ModuleGenerique{

        public function __construct(){
        	$this->controleur = new Controleur_Frigo();
        }

        public function index(){
            $this->controleur->init();
        }


    }

 ?>

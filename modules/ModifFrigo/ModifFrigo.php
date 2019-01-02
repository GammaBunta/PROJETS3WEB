
<?php
    require_once('./ClassesGeneriques/module_generique.php');
    include('Cont_ModifFrigo.php');

    class ModifFrigo extends ModuleGenerique{

        public function __construct(){
        	$this->controleur = new Controleur_ModifFrigo();
        }

        public function index(){
            $this->controleur->init();

        }


    }

 ?>
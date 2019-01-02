<?php
require_once('./ClassesGeneriques/module_generique.php');
include('Cont_ajoutRecette.php');

class ajoutRecette extends ModuleGenerique{

    public function __construct(){
        $this->controleur = new Controleur_ajoutRecette();
    }

    public function index(){
        $action = '';
        if(isset($_GET['action'])){
            $action = htmlspecialchars($_GET['action']);
        }
        switch ($action) {
            case 'publier':
                $this->controleur->publier();
                break;

            default :
                $this->controleur->init();
                break;

        }
    }
}

?>

<?php
    class VueGenerique{

        public function __construct(){
            ob_start();
        }

        public function getAffichage(){
            $contenu = ob_get_clean();
            return $contenu;
        }

        public function getHiddenToken($token){
            return '<input id="token" name="token" type="hidden" value='.$token.'>';
        }
    }


?>

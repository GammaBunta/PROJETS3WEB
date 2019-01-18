<?php

    class ControleurGenerique{

        protected $vue;

        public function getAffichage(){
            return $this->vue->getAffichage();
        }


        public function genereTokenSession(){
            $token = bin2hex(random_bytes(64));
            $_SESSION['token']=$token;
            date_default_timezone_set('Europe/Paris');
            $my_date=date("Y-m-d H:i:s");
            $my_date_time=time("Y-m-d H:i:s");
            $my_new_date_time=$my_date_time+1200;
            $dateplus20min=date("Y-m-d H:i:s",$my_new_date_time);
            $_SESSION['dateToken']=$dateplus20min;
            return $token;
        }
    }

?>

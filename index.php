<?php
      session_start();
      require_once('./composants/head.php');
      require_once('./composants/header.php');
      require_once('./modules/Frigo/Frigo.php');
      require_once('./modules/Connexion/Connexion.php');
      require_once('./modules/Accueil/Accueil.php');

       if(isset($_GET['module'])){
               $module= htmlspecialchars($_GET['module']);
       }else{
           $module='';
       }


       switch($module){

           case 'Accueil':
           case 'Frigo':
           case 'Connexion':
           case 'Recettes':
               $mod = new $module();
               $mod -> index();
               $vue = $mod->getAffichage();
            break;

           default:
              $mod = new Accueil();
              $mod -> index();
              $vue = $mod->getAffichage();
            break;

       }

       echo $vue;

?>

<?php
    include('./composants/footer.php');
?>

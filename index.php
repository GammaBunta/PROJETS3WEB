<?php
      session_start();
      require_once('./composants/head.php');
      require_once('./composants/header.php');
      require_once('./modules/Frigo/Frigo.php');
    /*


     // AFFICHE TABLE INGREDIENT
     /*$result= $bdd -> query ('select * from Ingredient');
     $res = $result->fetchAll();
     foreach($res as $item){
        echo $item['nomingr'].' '.$item['unite'].' '.$item['protide'].' '.$item['lipide'].' '.$item['glucide'].' '.$item['calorie'].' '.$item['congele'].' '.$item['famille'];
        echo '<br>';
    }*/



       if(isset($_GET['module'])){
               $module= htmlspecialchars($_GET['module']);
       }else{
           $module='';
       }


       switch($module){

           case 'Frigo':
               $mod = new $module();
               $mod -> index();
               $vue = $mod->getAffichage();

           break;

           default:
              $vue = 'OUI';
              echo'<a href="index.php?module=Frigo">FRIGO</a>';
              break;

       }

       echo $vue;

?>



<?php
    include('./composants/footer.php');
?>

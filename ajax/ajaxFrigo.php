<?php
    require_once('ModeleAjax.php');
    $modele = new Modele_Ajax();
    $array = $modele->getIngredients($_GET['famille'], $_GET['id']);
    echo '<ul class="list-group">';
    foreach($array as $item){
       echo utf8_encode(' <li href="#"  class="list-group-item list-group-item-action list-group-item-success text-left"><acronnym title ="Quantite :'.$item['quantite'].' Date : '.$item['datePeremption'].'">'.$item['nomingr'].'</acronym><button type="button" onclick="retirerun(\''.$item['idingr'].'\')" class="btn btn-success float-right ml-1"><img   style="height: 22px;width:22px;" src="./Images/trash.svg" alt="-1 ingrédient "/></button>
<button type="button" onclick="ajoutCuisiner(\''.$item['nomingr'].'\', '.$_GET['id'].')" class="btn btn-success float-right" >+</button>

       </li>');
    }
    echo '</ul>';

?>

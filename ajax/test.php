<?php
    require_once('ModeleAjax.php');
    $modele = new Modele_Ajax();
    $array = $modele->getIngredients($_GET['famille']);
    echo '<ul>';
    foreach($array as $item){
        echo "<li>".$item['nomingr']."</li>";
        echo '<br/>';
    }
    echo '</ul>';
?>

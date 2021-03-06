  <?php
    require_once('./ClassesGeneriques/vue_generique.php');
    class Vue_Frigo extends VueGenerique{

        public function __construct(){
            parent::__construct();
        }


        public function afficheInit($res, $res2){
            echo '
            <head>
              <?php include "./composants/head.php"; ?>
              <link rel="stylesheet" type="text/css" href="./CSS/Frigo.css">
              <script type="text/javascript" src="./scripts/frigo.js"> </script>

            	<title>Frigo</title>
            </head>

            <body onload="setId(' . $_SESSION['id'] . ');minDate();">
             	<main class="text-center padding-bottom padding-top-xl mt-5 mb-5">
                    <div class="container mt-5 mb-3">
                            <div class="row">
                              <div id="ul1"  class="col-3 mt-5">
                                  <div class="list-group" id="myList" role="tablist">
                                        <a class="list-group-item list-group-item-action active list-group-item-success" data-toggle="list" href="#" id="lait" role="tab" >Laitiers</a>
                                        <a class="list-group-item list-group-item-action list-group-item-success" data-toggle="list" href="#" role="tab"id="viandes">Viandes</a>
                                        <a class="list-group-item list-group-item-action list-group-item-success" data-toggle="list" href="#" role="tab" id="legumes">Légumes</a>
                                        <a class="list-group-item list-group-item-action list-group-item-success" data-toggle="list" href="#" role="tab" id="fruits">Fruits</a>
                                  </div>
                                  <div class="list-group" id="myList" role="tablist">
                                         <a class="list-group-item list-group-item-action active list-group-item-secondary" data-toggle="list" href="#" role="tab" id="epicerie">Epicerie</a>
                                         <a class="list-group-item list-group-item-action list-group-item-secondary" data-toggle="list" href="#" role="tab" id="condiments">Condiments</a>
                                         <a class="list-group-item list-group-item-action list-group-item-secondary" data-toggle="list" href="#" role="tab" id="feculents">Féculents</a>
                                         <a class="list-group-item list-group-item-action list-group-item-secondary" data-toggle="list" href="#" role="tab" id="autres">Autres</a>
                                   </div>
                              </div>
                              <div class="text-left col-3 mt-5">
                                <h4 id="titre1" class="text-light bg-dark border border-secondary mb-0 centered">
                                  Ajouter Produits Laitiers
                                </h4>
                                <div  class="pre-scrollable bg-light border border-secondary" style="height: 266.2px;">
                                    <div >
                                        <ul id="listeIngrTout" class="list-group">
                                        ';
                                        $compteur=0;
                                        foreach($res2 as $item){
                                            $idcollapse="item".$compteur;
                                          $id =$item['idingr'];
                                          $idquantite = "quantite".$id;
                                          $iddate = "date".$id;
                                           echo utf8_encode(' <li class="list-group-item list-group-item-action list-group-item-success text-left col-12">'.$item['nomingr'].'
                                                                <button type="button" class="btn btn-success float-right" data-toggle="collapse" data-target="#'.$idcollapse.'" aria-expanded="false" aria-controls="'.$idcollapse.'">
                                                                +
                                                                </button>
                                                                    <div class="container collapse bg-white mt-4 p-1" id="'.$idcollapse.'">
                                                                      <label for="dte">Date de peremption :</label>
                                                                      <div class = "row">
                                                                        <div class="col-sm-5">
                                                                          <input id="'.$iddate.'" type="date"  name="date" class="date">
                                                                        </div>
                                                                      </div>
                                                                      <label for="quantite">Quantite :</label>
                                                                      <div class = "row">

                                                                        <div class="col-sm-5">
                                                                          <input class="form-control" type="number" min="1" id="'.$idquantite.'"  min="0" max="64" name="quantite">
                                                                        </div>
                                                                      </div>
                                                                      <div class = "row">
                                                                        <div class="col-12 mt-2">
                                                                          <button id="submit" onclick="submitAjoutFrigo(\''.$id.'\')" class="btn btn-success float-right">Ajouter</button>
                                                                        </div>
                                                                      </div>
                                                                      <input id="idingr" name="idingr" type="hidden" value="'.$id.'">
                                                                    </div>
                                                                  </li>



                                                              ');
                                                              $compteur++;

                                    }

                                        echo'
                                        </ul>
                                    </div>
                                </div>
                              </div>
                              <div class="col-4 offset-md-2">
                                <h4 id="titre" class=" mt-5 text-light bg-dark border border-secondary mb-0">
                                  Produits Laitiers
                                </h4>
                                <div  class="pre-scrollable bg-light border border-secondary" style="height: 266.2px;">
                                    <div id="listeIngr">
                                        <ul class="list-group">';

                                        foreach($res as $item){
                                           echo utf8_encode(' <li href="#"  class="list-group-item list-group-item-action list-group-item-success text-left col-12"><acronnym title ="Quantite :'.$item['quantite'].'">'.$item['nomingr'].'</acronym>
                                               <button type="button" onclick="retirerun(\''.$item['idingr'].'\')" class="btn btn-success float-right ml-1"><img   style="height: 22px;width:22px;" src="./Images/trash.svg" alt="-1 ingrédient "/></button>
                                           <button type="button" onclick="ajoutCuisiner(\''.$item['nomingr'].'\')" class="btn btn-success float-right" >+</button><acronym title="retirer 1 '.$item['nomingr'].'"></acronym>
                                           ');

                                        }
                                        echo'
                                        </ul>
                                    </div>
                                </div>
                                <h4 id="titre" class="text-light bg-dark border border-secondary mb-0">
                              Ingrédients à cuisiner
                                </h4>
                            <div class="pre-scrollable bg-light border border-secondary" style="height: 266.2px;">
                                <ul class="list-group" id="aCuisiner">

                                </ul>
                            </div>
                             <button type="button" class="border border-secondary btn btn-secondary btn-block" onclick="chercherRecettes()" >Chercher une recette</button>
                              </div>
                            </div>

                </main>
            </body>';

        }


    }

?>

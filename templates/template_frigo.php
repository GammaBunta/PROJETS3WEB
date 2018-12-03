<!DOCTYPE html>
<html>
<head>
  <?php include "./composants/head.php"; ?>
  <link rel="stylesheet" type="text/css" href="./CSS/Frigo.css">
  <script type="text/javascript" src="scripts/categorie.js"> </script>
	<title>Frigo</title>
</head>

<body>
 	<main class="text-center padding-bottom padding-top-xl">
        <div class="container mt-5">
                <div class="row">
                  <div id="ul1"  class="col-3">
                      <div class="list-group" id="myList" role="tablist">
                            <a class="list-group-item list-group-item-action active list-group-item-success" data-toggle="list" href="#" id="lait" role="tab" >Laitiers</a>
                            <a class="list-group-item list-group-item-action list-group-item-success" data-toggle="list" href="#" role="tab" onclick="viandes()">Viandes</a>
                            <a class="list-group-item list-group-item-action list-group-item-success" data-toggle="list" href="#" role="tab" onclick="legumes()">Légumes</a>
                            <a class="list-group-item list-group-item-action list-group-item-success" data-toggle="list" href="#" role="tab" onclick="fruits()">Fruits</a>
                      </div>
                  </div>
                  <div class="text-left col-3">
                     <div class="list-group" id="myList" role="tablist">
                            <a class="list-group-item list-group-item-action active list-group-item-secondary" data-toggle="list" href="#" role="tab" onclick="epicerie()">Epicerie</a>
                            <a class="list-group-item list-group-item-action list-group-item-secondary" data-toggle="list" href="#" role="tab" onclick="condiments()">Condiments</a>
                            <a class="list-group-item list-group-item-action list-group-item-secondary" data-toggle="list" href="#" role="tab" onclick="feculents()">Féculents</a>
                            <a class="list-group-item list-group-item-action list-group-item-secondary" data-toggle="list" href="#" role="tab" onclick="autres()">Autres</a>
                      </div>
                  </div>
                  <div class="col-4 offset-md-1">
                    <h4 id="titre" class="text-light bg-dark border border-secondary mb-0">
                      Produits Laitiers
                    </h4>
                    <div  class="pre-scrollable bg-light border border-secondary" style="height: 266.2px;">
                        <div id="listeIngr">
                            <!-- affichage resultat jquery-->
                        </div>
                    </div>
                  </div>
                </div>
            <div class="row">
                    <div class="col-4 offset-md-7 mt-4 ">
                        <h4 id="titre" class="text-light bg-dark border border-secondary mb-0">
                      Ingrédients à cuisiner
                        </h4>
                    <div class="pre-scrollable bg-light border border-secondary" style="height: 150px;">
                    </div>
                     <button type="button" class="border border-secondary btn btn-secondary btn-block">Chercher une recette</button>
                  </div>
            </div>
    </main>
</body>
</html>

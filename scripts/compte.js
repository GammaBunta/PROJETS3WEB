function change(id) {
	if (id == "1"){
		var text = "<hr>\n<form  action='?module=Compte&action=pseudo' method='post' id='needs-validation' novalidate>" +
          "<div class='form-group row'>" +
            "<label for='Pseudo' class='col-4 col-form-label'>Pseudo </label>" +
            "<div class='col-8'>" +
              "<input id='pseudo' name='pseudo' placeholder='Pseudo' class='form-control here' required='required' type='text'>" +
            "</div>" +
          "</div>" +
          "<div class='form-group row'>" +
            "<div class='offset-4 col-8'>" +
              "<button name='submit' type='submit' class='btn btn-primary'>Changer pseudo</button>" +
              "<button name='submit' type='submit' onclick='change(4)' class='btn btn-danger ml-2'>Annuler</button>" +
            "</div>" +
          "</div>" +
          "</form>";
	}
	else if(id=="2"){
    var text = "<hr>\n<form  action='?module=Compte&action=email' method='post' id='needs-validation' novalidate>" +
          "<div class='form-group row'>" +
            "<label for='Pseudo' class='col-4 col-form-label'>Mail </label>" +
            "<div class='col-8'>" +
              "<input id='email' name='email' placeholder='E-mail' class='form-control here' required='required' type='email'>" +
            "</div>" +
          "</div>" +
          "<div class='form-group row'>" +
            "<div class='offset-4 col-8'>" +
              "<button name='submit' type='submit' class='btn btn-primary'>Changer E-mail</button>" +
              "<button name='submit' type='submit' onclick='change(4)' class='btn btn-danger ml-2'>Annuler</button>" +
            "</div>" +
          "</div>" +
          "</form>";
	}
  else if(id == "3"){
    var text = "<hr>\n<form action='?module=Compte&action=mdp' method='post' id='needs-validation' novalidate>" +
      "<div class='form-group row'>" +
        "<label for='mdp' class='col-4 col-form-label'>Mot de passe </label>" +
        "<div class='col-8'>" +
          "<input id='mdp1' name='mdp1' placeholder='Mot de passe' class='form-control here' required='required' type='password'>" +
        "</div>" +
      "</div>" +
      "<div class='form-group row'>" +
        "<label for='mdp' class='col-4 col-form-label'>Confirmer mot de passe </label>" +
        "<div class='col-8'>" +
          "<input id='mdp2' name='mdp2' placeholder='Confirmer ot de passe' class='form-control here' required='required' type='password'>" +
        "</div>" +
      "</div>" +
      "<div class='form-group row'>" +
        "<div class='offset-4 col-8'>" +
          "<button name='submit' type='submit' class='btn btn-primary'>Changer mot de passe</button>" +
          "<button name='submit' type='submit' onclick='change(4)' class='btn btn-danger ml-2'>Annuler</button>" +
        "</div>" +
      "</div>" +
      "</form>";

  }
  else{
    var text = "";
  }
	document.getElementById("d1").innerHTML = text;
}

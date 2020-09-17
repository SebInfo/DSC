<!DOCTYPE html>
<html>
  <head>
    <title>Ajout d'un pompier</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Liaison au fichiers css de Bootstrap en local -->
    <link href="Bootstrap/css/bootstrap.css" rel="stylesheet">
  </head>
  <body>  
    <div class="container">
      <h1>Ajout d'un pompier</h1>
      <form method="post"  id="form"  novalidate> 
        <!-- novalidate désactive la vérification du navigateur -->
        <div class="form-row">

          <div class="form-group col-md-6">
            <label for="matricule">Matricule</label>
            <input type="text" class="form-control" name="matricule" id="matricule" placeholder="Ex : 876524" required>
            <div class="invalid-feedback">
              Le matricule est obligatoire
            </div>
          </div>
          <div class="form-group col-md-6">
            <label for="dateNaissance">Date de Naissance</label>
            <input type="date" class="form-control" name="dateNaissance" id="dateNaissance" required>
            <div class="invalid-feedback">
              La date de naissance est obligatoire
            </div>
          </div>

          <div class="form-group col-md-6">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" name="nom" id="Nom" required>
            <div class="invalid-feedback">
              Le nom du pompier est obligatoire
            </div>
          </div>
          <div class="form-group col-md-6">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" name="prenom" id="prenom" required>
            <div class="invalid-feedback">
              Le prénom du pompier est obligatoire
            </div>
          </div>

          <!-- Boutons radio -->
          <div class="form-group col-md-6">
            <label class="md-3" for="sexe">Sexe  :</label>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" class="custom-control-input" id="sexef" name="sexe" value="féminin">
              <label class="custom-control-label" for="sexef">féminin</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" class="custom-control-input" id="sexem" name="sexe" value="masculin" checked>
              <label class="custom-control-label" for="sexem">masculin</label>
            </div>
            <div class="invalid-feedback">
              Le sexe est obligatoire
            </div>
          </div>

          <!-- Liste déroulante -->
          <div class="form-group col-md-6">
            <label for="grade">Grade</label>
            <div class="form-group">
              <select class="form-control" id="grade">
                <option value="Capitaine">Capitaine</option>
                <option value="Sergent">Sergent</option>
                <option value="Caporal">Caporal</option>
                <option value="Première classe">Première classe</option>
              </select>
            </div>
            <div class="invalid-feedback">
              Le grade est obligatoire
            </div>
          </div>

          <div class="form-group col-md-6">
            <label for="tel">Téléphone</label>
            <input type="tel" class="form-control" name="tel" id="tel">
          </div>
          <div class="form-group col-md-6">
            <label for="caserne">Caserne</label>
            <div class="form-group">
              <select class="form-control" id="caserne">
                <option >Oussant</option>
                <option >Carcassonne</option>
                <option >Toulouse</option>
              </select>
            </div>
            <div class="invalid-feedback">
              La caserne est obligatoire
            </div>
          </div>

          <div class="form-group col-md-6">
            <label class="md-3" for="type">Type pompier  :</label>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" class="custom-control-input" id="pro" name="type" value="professionnel">
              <label class="custom-control-label" for="pro">Professionnel</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" class="custom-control-input" id="volontaire" name="type" value="volontaire" checked>
              <label class="custom-control-label" for="volontaire">Volontaire</label>
            </div>
            <div class="invalid-feedback">
              Le type est obligatoire
            </div>
          </div>
        </div>

        <input type="submit" value="Valider" class="btn btn-primary" name="valider" />
        
      </form>
    </div>

    <!-- Script pour gérer les affichages dans les class : invalid-feedback -->
    <script>
      (function() {
        "use strict"
        window.addEventListener("load", function() {
          var form = document.getElementById("form")
          form.addEventListener("submit", function(event) {
            if (form.checkValidity() == false) {
              event.preventDefault()
              event.stopPropagation()
            }
            form.classList.add("was-validated")
          }, false)
        }, false)
      }())
    </script>
  </body>
</html>

<!-- Les liaisons aux scripts -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>